<?php
$target_dir = "img/";  // Directory in cui verranno salvati i file
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

echo $_POST['nome'] ?? 'senza nome';


// Controlla se il file è un'immagine reale o un falso
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Il file è un'immagine - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Il file non è un'immagine.";
        $uploadOk = 0;
    }
}

// Controlla se il file esiste già
if (file_exists($target_file)) {
    echo "Il file esiste già.";
    $uploadOk = 0;
}

// Controlla la dimensione del file
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Il file è troppo grande.";
    $uploadOk = 0;
}

// Permette solo alcuni formati di file
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" 
&& $imageFileType != "gif" ) {
    echo "Sono permessi solo i formati JPG, JPEG, PNG e GIF.";
    $uploadOk = 0;
}

// Controlla se $uploadOk è stato impostato a 0 a causa di un errore
if ($uploadOk == 0) {
    echo "Il file non è stato caricato.";
// Se tutto è ok, prova a caricare il file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Il file ". basename( $_FILES["fileToUpload"]["name"]). " è stato caricato.";
    } else {
        echo "C'è stato un errore durante il caricamento del file.";
    }
}
?>