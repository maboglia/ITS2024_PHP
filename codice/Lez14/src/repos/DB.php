<?php

namespace VB\repos;

class DB {

    private string $host = 'localhost';
    private string $dbName = 'prodotti';
    private string $username = 'prodottiUser';
    private string $password = 'prodottiPwd';
    private $conn;

    public function getConnessione() {
        $this->conn = null;
        try {
            $this->conn = new \PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->dbName,
                $this->username,
                $this->password
            );
            $this->conn->exec('set names utf8');
        } catch (\PDOException $eccezione) {
            echo 'connection error' . $eccezione->getMessage();
        }
        return $this->conn;
    }

}