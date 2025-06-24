<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transactie;
use App\Models\Product;
use App\Models\Bestelling;

class BestellingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:product,id',
            'bestel_aantal' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);

        $transactie = Transactie::firstOrCreate(
            ['medewerker_id' => Auth::id()],
            ['datum' => now()]
        );

        Bestelling::create([
            'transactie_id' => $transactie->id,
            'product_id' => $product->id,
            'omschrijving' => $product->omschrijving,
            'prijs' => $product->prijs,
            'aantal' => $request->bestel_aantal,
        ]);

        // Pas voorraad aan
        $product->aantal += $request->bestel_aantal;
        $product->save();

        return redirect()->back()->with('success', 'Bestelling succesvol geplaatst en voorraad bijgewerkt.');
    }
}
