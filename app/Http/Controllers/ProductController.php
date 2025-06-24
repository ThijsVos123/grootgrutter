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
}
