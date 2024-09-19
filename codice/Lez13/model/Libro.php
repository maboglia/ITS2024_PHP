<?php

class Libro{

    public string $titolo;//protected private
    public float $prezzo;

    private bool $disponibile;

    //costruzione 
    public function __construct(string $titolo, float $prezzo){
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->disponibile = true;
    }

    //getters setters
    public function getTitolo(){
        return $this->titolo;
    }

    
    public function getPrezzo(): float{
        return $this->prezzo;
    }

    public function setPrezzo(float $nuovoPrezzo): void {
        $this->prezzo = $nuovoPrezzo;
    }

    public function __tostring(): string{
        return $this->titolo . ' - ' . $this->prezzo . ' - ' .$this->disponibile;
    }


}

