<?php

include_once './Libreria.php';

$libreria = new Libreria();

$elenco = file('https://raw.githubusercontent.com/maboglia/ProgrammingResources/master/tabelle/libri/Biblioteca2.csv');

foreach ($elenco as $bookCSV) {
    
    $book = explode(',', $bookCSV);

    $titolo = $book[3] ?? 'unknown';
    $prezzo = rand(5, strlen($titolo));

    $libreria->addLibro(new Libro($titolo, $prezzo));

}

header('Content-Type:application/json');

echo json_encode($libreria->getLibri());




