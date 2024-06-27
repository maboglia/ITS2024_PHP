<?php
//include 'punto.php';
class Segmento {

    private $a, $b;

    public function __construct($a=new Punto(), $b=new Punto()) {
        $this->a = $a;
        $this->b = $b;
    }


    public function __get($nomeProprieta){//accessori
        return $this->$nomeProprieta;
    }

    // public function __set($nomeProprieta, $valore) {//mutatori
    //     $this->$nomeProprieta = $valore;
    // }

    public function lunghezza(){
        return    sqrt( pow($this->a->x - $this->b->x , 2) +    pow($this->a->y - $this->b->y , 2) ) ;                     ;
    }


}

// $a = new Punto(2,1);
// $b = new Punto(6,1);
// $c = new Punto(2,4);

// $ab = new Segmento($a, $b);
// $ac = new Segmento($a, $c);
// $bc = new Segmento($b, $c);
// //echo $ab->lunghezza();
// // echo $ac->lunghezza();
//  echo $bc->lunghezza();













