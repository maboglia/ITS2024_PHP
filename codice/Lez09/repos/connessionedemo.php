<?php

include './LibroDAO.php';

$dao = new LibroDAO();


$libro1 = new Libro('I promessi sposi');

$libro1->pagine = 123;
$libro1->prezzo = 10.50;
$libro1->autore = 'A.Manzoni';

$dao->addLibro($libro1);
$dao->addLibro($libro1);
$dao->addLibro($libro1);
$dao->addLibro($libro1);

$dao->getLibri();
