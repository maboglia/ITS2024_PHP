<?php

namespace App\model;

class Prodotto
{

  public function __construct(
    private string $nome,
    private float $prezzo
  ) {

  }
}

