<?php

use App\Models\Prodotto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('prodotti', function () {
    return response()->json(Prodotto::all());
});
