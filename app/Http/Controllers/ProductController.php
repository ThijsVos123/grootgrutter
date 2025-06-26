<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Logs;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $zoek = $request->input('zoek');

        $products = Product::query()
            ->when($zoek, function ($query, $zoek) {
                $query->where(function ($query) use ($zoek) {
                    $query->where('artikelnummer', 'like', "%{$zoek}%")
                        ->orWhere('omschrijving', 'like', "%{$zoek}%")
                        ->orWhere('leverancier', 'like', "%{$zoek}%")
                        ->orWhere('artikelgroep', 'like', "%{$zoek}%")
                        ->orWhere('eenheid', 'like', "%{$zoek}%");
                });
            })
            ->get();

        $totaleVoorraad = $products->sum('aantal');
        $totaleProducten = $products->count();

        return view('dashboard.index', compact('products', 'totaleVoorraad', 'totaleProducten'));
    }

    public function edit(Product $product)
    {
        return view('dashboard.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'artikelnummer' => 'required|string|max:255',
            'omschrijving' => 'nullable|string|max:255',
            'leverancier' => 'nullable|string|max:255',
            'artikelgroep' => 'nullable|string|max:255',
            'eenheid' => 'nullable|string|max:255',
            'prijs' => 'nullable|numeric',
            'minvoorraad' => 'nullable|integer',
            'aantal' => 'nullable|integer',
        ]);

        $oldStock = $product->aantal ?? 0;
        $newStock = $request->has('aantal') ? (int) $request->input('aantal') : $oldStock;

        // Check of de voorraad veranderd is
        $stockChanged = $oldStock !== $newStock;

        // Als voorraad is aangepast, moet er een reden zijn
        if ($stockChanged && empty($request->input('logs_reden'))) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['logs_reden' => 'Geef een reden op voor de wijziging van de voorraad.']);
        }

        // Product updaten
        $validated['aantal'] = $newStock;

        $product->update($validated);

        // Indien voorraad is gewijzigd → opslaan in stock_adjustments
        if ($stockChanged) {
            Logs::create([
                'product_id' => $product->id,
                'oudvoorraad' => $oldStock,
                'nieuwvoorraad' => $newStock,
                'reden' => $request->input('logs_reden'),
                'user_id' => auth()->id(),
            ]);
        }

        return redirect()->route('dashboard.index')->with('success', 'Product succesvol bijgewerkt.');
    }



    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('dashboard')->with('success', 'Product succesvol verwijderd.');
    }
}
