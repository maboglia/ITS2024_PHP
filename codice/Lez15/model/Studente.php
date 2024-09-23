<?php


class Studente {

    private static int $contatore = 1;

    private int $matricola;

    function __construct(
        private string $nome, 
        private string $cognome
    ){

        $this->matricola = self::$contatore++;

    }

    function __tostring() : string {
        return $this->matricola . ' ' . $this->nome . ' ' . $this->cognome  ;
    }




}





