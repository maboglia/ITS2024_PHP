<?php

namespace App\database;

class ItemDAO {
  private $conn;
  private $table = 'items';

  public function __construct($db) {
      $this->conn = $db;
  }

  // Creare un nuovo oggetto
  public function create($data) {
      $query = "INSERT INTO " . $this->table . " (title, description, size, price, image) VALUES (:title, :description, :size, :price, :image)";
      $stmt = $this->conn->prepare($query);

      // Bind dei parametri
      $stmt->bindParam(':title', $data['title']);
      $stmt->bindParam(':description', $data['description']);
      $stmt->bindParam(':size', $data['size']);
      $stmt->bindParam(':price', $data['price']);
      $stmt->bindParam(':image', $data['image']);

      if ($stmt->execute()) {
          return true;
      }
      return false;
  }

  // Leggere tutti gli oggetti
  public function read() {
      $query = "SELECT * FROM " . $this->table;
      $stmt = $this->conn->prepare($query);
      $stmt->execute();
      return $stmt;
  }
}