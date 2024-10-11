<?php
// app/Controllers/ItemController.php
namespace App\controller;

use App\database\ItemDAO;
use App\model\Item;
use App\database\Connessione;

class ItemController {
    private $db;
    private $itemDAO;

    public function __construct() {
        $database = new Connessione();
        $this->db = $database->getConnection();
        $this->itemDAO = new ItemDAO($this->db);
    }

    // Creazione di un nuovo oggetto
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'size' => $_POST['size'],
                'price' => $_POST['price'],
                'image' => $this->uploadImage()
            ];

            if ($this->itemDAO->create($data)) {
                $this->respond(['message' => 'Oggetto creato con successo']);
            } else {
                $this->respond(['message' => 'Errore nella creazione dell\'oggetto'], 500);
            }
        }
    }

    public function creaJson() {
      $prodotto = (file_get_contents('php://input'));
      // var_dump($prodotto);
      header('content-type:application/json');
      echo $prodotto;
    }

    // Recuperare tutti gli oggetti
    public function read() {
        $result = $this->itemDAO->read();
        $items = $result->fetchAll(\PDO::FETCH_ASSOC);
        $this->respond($items);
    }
    public function leggi() {
        $result = $this->itemDAO->read();
        $items = $result->fetchAll(\PDO::FETCH_OBJ);
        return $items;
    }

    // Upload dell'immagine
    private function uploadImage() {
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($_FILES["image"]["name"]);
            move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
            return $targetFile;
        }
        return null;
    }

    // Risposta JSON
    private function respond($data, $status = 200) {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}