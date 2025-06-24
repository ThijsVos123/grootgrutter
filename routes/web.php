<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/edit/{product}', [ProductController::class, 'edit'])->name('dashboard.edit');
    Route::put('/dashboard/update/{product}', [ProductController::class, 'update'])->name('dashboard.update');
});

Route::get('/bestellijst', [App\Http\Controllers\BestellijstController::class, 'index'])->name('bestellijst.index');
