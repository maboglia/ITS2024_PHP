<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function all() {
       $messaggio = 'Benvenuto nel sito';
       $messaggio2 = 'Lista dei prodotti';
       $prodotti = ['nome'=>'smartphone', 'prezzo'=>59.99];
       
       return view('prodotti', ['data'=>[$messaggio, $messaggio2, $prodotti]]);
    }
}
