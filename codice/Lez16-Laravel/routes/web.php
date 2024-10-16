<?php

use App\Http\Controllers\ProdottiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/prodotti', [ProdottiController::class, 'index']);

Route::resource('prodotti', ProdottiController::class);