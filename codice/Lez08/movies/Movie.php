<?php


class Movie {

    //stato: lo sato in cui si trovano le proprietà
    public $titolo;
    private $anno;
    public $rating;
    private $regista;


    //metodi: comportamento degli oggetti, le azioni che può compiere o che può subire un oggetto
    //servono per gestire le proprietà degli oggetti

    //costruttore: costruisce / crea un'istanza (esemplare) dell'oggetto e inizializza le proprietà

    public function __construct($titolo, $anno, $rating, $regista) {   
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->rating = $rating;
        $this->regista = $regista;
    }

    //getters: accessori
    public function __get($nomeDellaProprieta){
        return $this->$nomeDellaProprieta;
    }

    //setters: mutatori
    public function __set($nomeDellaProprieta, $nuovoValore){
        $this->$nomeDellaProprieta=$nuovoValore;
    }

    public function __tostring() {  
        return $this->titolo . ' ' . $this->regista;
    }

}