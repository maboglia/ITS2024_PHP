<?php

class Punto {

    private $x, $y;

    public function __construct($x=0, $y=0) {
        $this->x = $x;
        $this->y = $y;
    }

    public function __get($nomeProprieta){//accessori
        return $this->$nomeProprieta;
    }

    public function __set($nomeProprieta, $valore) {//mutatori
        $this->$nomeProprieta = $valore;
    }

    

    public function __toString() {  
        return "(".$this->x .",". $this->y.")";
    }

}
