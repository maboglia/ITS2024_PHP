<?php

class CanzoneCtrl {

    private $canzoni = []; //contenitore di canzoni

    public function __construct(){
        $this->inizializza();
    }

    public function tutteLeCanzoni(){
        return $this->canzoni;
    }

    private function inizializza(){

       $file_path = './assets/songs.txt';

       $canzoni_txt = file($file_path);

       foreach ($canzoni_txt as $riga) {
        
            $substring = explode(';', $riga);

            $id = $substring[0];
            $cantante = $substring[1];
            $titolo = $substring[2];

            $song = new Canzone($id, $titolo, $cantante);

            $this->canzoni[] = $song;//array_push($this->canzoni, $song);
       }


    }






}








?>