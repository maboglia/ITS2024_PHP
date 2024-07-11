<?php

class Libro {

    //devono essere incapsulate
    private $id;
    private $titolo;
    private $pagine;
    private $prezzo;
    private $autore;

    public function __construct(){
      
    }

    public function &__get($nomeProprieta){
        return $this->$nomeProprieta;
    }

    public function __set($nomeProprieta, $nuovoValoreProp){
        $this->$nomeProprieta = $nuovoValoreProp;
    }

    public function __tostring(){
        return 'Titolo: ' . $this->titolo . ' Autore: ' . $this->autore;
    }

}




