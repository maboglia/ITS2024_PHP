<?php

class Canzone {

    public function __construct(private $id, private $titolo, private $cantante) {}

    public function  __get($nome) {
        return $this->$nome;
    }

    public function __tostring(){
        return $this->titolo . ' ' . $this->cantante;
    }

}








?>