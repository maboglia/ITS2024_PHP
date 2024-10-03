<?php

require '../vendor/autoload.php';

/* use App\model\Prodotto;
$prodotto = new Prodotto('phon', 10);
var_dump($prodotto);

use App\database\Connessione;
$connessione = new Connessione();
$connessione->getConnection(); */

use App\controller\ItemController;
$ctrl = new ItemController();

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
  $ctrl->creaJson();
}

if ($method === 'GET') {
  $ctrl->read();
}