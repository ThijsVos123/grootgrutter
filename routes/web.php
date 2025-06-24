<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BestellijstController;
use App\Http\Controllers\BestellingController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/edit/{product}', [ProductController::class, 'edit'])->name('dashboard.edit');
    Route::put('/dashboard/update/{product}', [ProductController::class, 'update'])->name('dashboard.update');
    Route::delete('/dashboard/delete/{product}', [ProductController::class, 'destroy'])->name('dashboard.destroy');
});

Route::get('/bestellijst', [App\Http\Controllers\BestellijstController::class, 'index'])->name('bestellijst.index');
Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard.index');
Route::post('/bestellingen', [BestellijstController::class, 'store'])->name('bestellingen.index');
Route::post('/bestellingen', [BestellingController::class, 'store'])->name('bestellingen.store');

