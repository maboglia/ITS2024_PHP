<?php

namespace VB\repos;
include_once '../src/repos/DB.php';
include_once '../src/model/Prodotto.php';
use VB\repos\DB;
use VB\model\Prodotto;

class ProdottoDAO {

    private $connessione;
    private string $tabella = 'prodotti';

    public function __construct($connessione = null) {

        if($connessione == null) {
            $db = new DB();
            $connessione = $db->getConnessione();
        }

        $this->connessione = $connessione;
    }

    public function read() {
        $query = 'SELECT * FROM ' . $this->tabella;
        $statement = $this->connessione->prepare($query);
        $statement->execute();

        //$statement->setFetchMode(\PDO::FETCH_CLASS , "VB\model\Prodotto");
        $statement->setFetchMode(\PDO::FETCH_OBJ);
        $prodotti = [];
		
        while($prodotto = $statement->fetch()){
            $prodotti[] = $prodotto;
        }
        return $prodotti;
    }

    public function create($prodotto) {
        $query = "INSERT INTO {$this->tabella} (nome, descrizione, prezzo) VALUES (:nome, :descrizione, :prezzo)";

        $statement = $this->connessione->prepare($query);

        $nome = $prodotto->getNome();
        $descrizione = $prodotto->getDescrizione();
        $prezzo = $prodotto->getPrezzo();

        $statement->bindParam(':nome', $nome);
        $statement->bindParam(':descrizione', $descrizione);
        $statement->bindParam(':prezzo', $prezzo);

        if($statement->execute())
            return true;
        return false;
    }

}