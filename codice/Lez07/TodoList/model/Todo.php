<?php

class Todo {

    public static function counter() {
        static $counter = 0;
        $counter++;
        return $counter;
    }

    private $id;
    private $descrizione;
    private $data_creazione;
    private $completato;
    
    
    public function __construct($descrizione){
        //self::$counter;
        $this -> id = self::counter();
        $this -> descrizione = $descrizione;
        $this -> data_creazione = date('d/m/Y h:i:s');
        $this -> completato = false;
    }

    

    public function __get($name){
        return $this -> $name;
    }

    public function completaNota(){
        $this -> completato = true;
    }

    public function __tostring() {
        return $this->id .' - ' . $this->descrizione . ' - '. $this->data_creazione . ' - ' . $this->completato;
    }

}



