<?php

//faccio partire la sessione
session_start();

include_once './model/Canzone.php';
include_once './controller/CanzoneCtrl.php';

//me lo dovevi dire PRIMA

define('TITOLO_SITO', 'JukeBox');

$menu = [//array associativo
    ['etichetta'=> 'Home','collegamento'=> '?'],//0
    ['etichetta'=> 'Cantanti','collegamento'=> 'cantanti'],//1
    ['etichetta'=> 'Canzoni','collegamento'=> 'canzoni'],//2
    ['etichetta'=> 'PlayList','collegamento'=> 'playlist'],
    ['etichetta'=> 'Generi','collegamento'=> 'generi'],
];


/*




*/









?>