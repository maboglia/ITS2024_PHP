
<?php

//include './segmento.php';

class Triangolo {

    private $ab, $bc, $ac;

    function __construct(private $a, private $b, private $c){

        $this->ab = new Segmento($a, $b);
        $this->bc = new Segmento($b, $c);
        $this->ac = new Segmento($a, $c);

    } //assegnazione auto

    public function __get($nomeProprieta){//accessori
        return $this->$nomeProprieta;
    }
    public function __set($nomeProprieta, $valore) {//mutatori
         $this->$nomeProprieta = $valore;
    }

    public function perimetro(){
        return $this->ab->lunghezza() + $this->bc->lunghezza() + $this->ac->lunghezza();
    }

    public function superficie(){
        $sp = $this->perimetro() / 2;
        
        return sqrt( $sp * 
                        ($sp - $this->ab->lunghezza()) *                                           
                        ($sp - $this->bc->lunghezza()) *                                           
                        ($sp - $this->ac->lunghezza())                                            
                    ); 
    }

    function __tostring() {
        
        return "Il triangolo formato dai punti {$this->a}, {$this->b}, {$this->c}, 
            ha perimetro di {$this->perimetro()} e superficie di {$this->superficie()}";
    }

}