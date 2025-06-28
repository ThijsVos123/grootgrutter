<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BestellijstController;
use App\Http\Controllers\BestellingController;
use App\Http\Controllers\InzichtenController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::middleware(['role:Filiaalmanger|Magazijnmedewerker'])->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('dashboard.index');
        Route::get('dashboard/edit/{product}', [ProductController::class, 'edit'])->name('dashboard.edit');
        Route::put('dashboard/update/{product}', [ProductController::class, 'update'])->name('dashboard.update');
        Route::delete('dashboard/delete/{product}', [ProductController::class, 'destroy'])->name('dashboard.destroy');
    });

    Route::middleware(['role:Filiaalmanger'])->group(function () {
        Route::get('bestellijst', [BestellijstController::class, 'index'])->name('bestellijst.index');
        Route::post('bestellingen', [BestellijstController::class, 'store'])->name('bestellingen.index');
        Route::post('bestellingen', [BestellingController::class, 'store'])->name('bestellingen.store');
        Route::get('inzichten', [InzichtenController::class, 'index'])->name('inzichten.index');
        Route::post('inzichten/import-csv', [InzichtenController::class, 'importCsv'])->name('inzichten.import');
    });

});
