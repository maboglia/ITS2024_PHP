<?php

use App\Http\Controllers\FlagsController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/web', function () {
    return view('webdev',['nome'=>'mauro']);
});

Route::get('/products', [ProductController::class, 'all']);

//Route::get('/flags', [FlagsController::class, 'index']);

Route::resource('flags', FlagsController::class);

Route::get('/intervallo', function () {
    return 'Intervallo :)';
});
