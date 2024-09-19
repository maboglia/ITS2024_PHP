<?php

include_once '../src/repos/ProdottoDAO.php';

use VB\model\Prodotto;
use VB\repos\ProdottoDAO;

$prodotto = new Prodotto(2, 'Prodotto1', 'Descrizione prodotto', 9.99);

$prodottoDAO = new ProdottoDAO();

$prodottoDAO->create($prodotto);

echo '<pre>';
var_dump($prodottoDAO->read());
echo '</pre>';