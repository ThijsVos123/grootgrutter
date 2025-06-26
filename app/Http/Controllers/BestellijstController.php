<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class BestellijstController extends Controller
{
    public function index()
    {
        $productenOnderVoorraad = Product::whereColumn('aantal', '<', 'minvoorraad')->get();

        return view('bestellijst.index', [
            'products' => $productenOnderVoorraad,
        ]);
    }
}
