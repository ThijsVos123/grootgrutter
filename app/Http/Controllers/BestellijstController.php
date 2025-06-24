<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BestellijstController extends Controller
{
    public function index()
    {
        return view('bestellijst.index', [
            'bestellijst' => [],
        ]);
    }
}
