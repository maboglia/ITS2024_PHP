<?php
// app/Models/Item.php
namespace App\model;

use PDO;

class Item {
  private int $id;
  private string $title;
  private string $description;
  private string $size;
  private float $price;
  private string $image;
  
  public function __construct() {}

  public function __get($name){
    return $this -> $name;
  }

  public function __set($name, $value) {
    $this -> $name = $value;
  }

}