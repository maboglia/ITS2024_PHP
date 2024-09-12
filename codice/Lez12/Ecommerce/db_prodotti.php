<?php

include_once './Prodotto.php';

$fakestore = file_get_contents('https://fakestoreapi.com/products');

$fakestorePHP = json_decode($fakestore);

//var_dump($fakestorePHP);


$prodotti = [
    // ['nome'=>'iphone', 'prezzo'=>1200],
    // ['nome'=>'samsung s24', 'prezzo'=>900],
    // ['nome'=>'nokia 3310', 'prezzo'=>150],
    // ['nome'=>'google pixel', 'prezzo'=>800],
];

foreach ($fakestorePHP as $objProdotto) {

    $prodotto = new Prodotto($objProdotto->title, $objProdotto->image, $objProdotto->price);

    array_push($prodotti, $prodotto);
}

