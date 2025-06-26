<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
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

        $product->update($validated);

        return redirect()->route('dashboard')->with('success', 'Product bijgewerkt.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('dashboard')->with('success', 'Product succesvol verwijderd.');
    }
}
