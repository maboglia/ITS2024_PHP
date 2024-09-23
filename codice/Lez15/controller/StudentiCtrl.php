<?php

include_once '../model/Studente.php';

class StudentiCtrl 
{
    
    private array $studenti = [];


    function carica($filename = '../docs/studenti.csv') : void {
        
        $studenti_file = file($filename);

        foreach ($studenti_file as $studenti_riga) {
            $nome_cognome = explode(',', $studenti_riga);
            $studente_temp = new Studente($nome_cognome[0], $nome_cognome[1]);
            $this->studenti[] = $studente_temp;

        }

    }

    function scrivi($destinazione = '../docs/studenti_numerati.txt') : void {
        $file = fopen($destinazione, 'w');

        foreach ($this->studenti as $studente) {
            fwrite($file, $studente);
            //fwrite($file, "\r\n");
        }
        fclose($file);
    }

    function getStudenti() : array {
        return $this->studenti;
    }




}



