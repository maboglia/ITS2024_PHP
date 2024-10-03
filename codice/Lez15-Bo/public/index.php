<?php

require '../vendor/autoload.php';

include '../src/view/header.php';

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
  $ctrl->create();

  header('location:index.php');
}

if ($method === 'GET') {
  // $ctrl->read();
  $items = $ctrl->leggi();
  include '../src/view/form.php';
  include '../src/view/table.php';
}

include '../src/view/footer.php';