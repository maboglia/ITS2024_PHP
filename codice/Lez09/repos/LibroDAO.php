<?php

include_once '../model/Libro.php';
include_once '../repos/Connessione.php';

class LibroDAO {

    private $connessione;
    private $miaConn;

    public function __construct(){
        $this->connessione = new Connessione();
        $this->miaConn = $this->connessione->getConn();
    }


    public function addLibro($libro) {
        
        $query = "INSERT INTO libri (titolo, pagine, prezzo, autore) values(:titolo, :pagine, :prezzo, :autore)";
        $statement = $this->miaConn->prepare($query);

        $statement->bindParam(':titolo', $libro->titolo, PDO::PARAM_STR);
        $statement->bindParam(':pagine', $libro->pagine, PDO::PARAM_INT);
        $statement->bindParam(':prezzo', $libro->prezzo, PDO::PARAM_STR);
        $statement->bindParam(':autore', $libro->autore, PDO::PARAM_STR);
        
        $statement->execute();


    }

    public function getLibri() {
        $query = "SELECT * FROM libri";
        $resultSet = $this->miaConn->query($query);

        $resultSet->setFetchMode(PDO::FETCH_CLASS, 'Libro');

        $libri = [];

        while ($record = $resultSet->fetch()) {
           //$libro = new Libro();
           
            //$libro->titolo = $record['titolo'];

            $libri[] = $record;

        }
        
        return $libri;
    }

    public function getLibroById($id) {
        
    }






}



