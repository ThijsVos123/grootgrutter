<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('dashboard');
});

Route::get('/bestellijst', [App\Http\Controllers\BestellijstController::class, 'index'])->name('bestellijst.index');
