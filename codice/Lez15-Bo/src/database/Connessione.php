<?php
// config/database.php
namespace App\database;

use PDO;
use PDOException;

class Connessione {
    private $host = 'localhost';
    private $db_name = 'catalogo_collezioni';
    private $username = 'root';
    private $password = '';
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Errore nella connessione: " . $exception->getMessage();
        }
        return $this->conn;
    }
}