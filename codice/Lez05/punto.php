<?php

class Punto {

    public $x, $y;

    public function __construct($x=0, $y=0) {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString() {  
        return "(".$this->x .",". $this->y.")";
    }

}
