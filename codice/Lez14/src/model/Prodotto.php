<?php

namespace VB\model;

class Prodotto {

    public function __construct(
        private int $id,
        private string $nome,
        private ?string $descrizione,
        private float $prezzo,
        private ?bool $disponibile = null
    ) {
        $this->disponibile = true;
    }

    //getters
    public function getNome(): string {
        return $this->nome;
    }
    
    public function getDescrizione(): string {
        return $this->descrizione;
    }

    public function getPrezzo(): float {
        return $this->prezzo;
    }

    public function __get($name): mixed {
        return $this->$name;
    }

    //setters
    public function __set($name, $value): void {
        $this->$name = $value;
    }

}