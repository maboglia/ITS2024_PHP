<?php

include_once '../model/Libro.php';
include_once '../repos/LibroDAO.php';

$dao = new LibroDAO();


//se ricevo i dati dal form
if (isset($_POST['titolo'])){
    $titolo = $_POST['titolo'];
    $pagine = $_POST['pagine'];
    $prezzo = $_POST['prezzo'];
    $autore = $_POST['autore'];

    $libro = new Libro();
    $libro->titolo = $titolo;
    $libro->pagine = $pagine;
    $libro->prezzo = $prezzo;
    $libro->autore = $autore;

    $dao->addLibro($libro);
    header('Location:../view/tabella_libri.php');
}

if (isset($_GET['leggi']) && $_GET['leggi']== 'tutti'){
    echo '<pre>';
    print_r($dao->getLibri());
    echo '</pre>';
}









