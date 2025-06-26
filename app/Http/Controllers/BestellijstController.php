<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class BestellijstController extends Controller
{
    public function index()
    {
        $productenOnderVoorraad = Product::where('aantal', '<', 10)->get();

        return view('bestellijst.index', [
            'products' => $productenOnderVoorraad,
        ]);
    }
}
