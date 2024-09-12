<?php

session_start();

if (!isset($_SESSION['logged'])){
    header('Location:./index.php');
}

//var_dump($_SESSION);
// var_dump($_COOKIE);

// if ($_SESSION['logged']){
//     echo 'Sei LOGGATO';
// } else {
//     echo 'NON Sei LOGGATO';
    
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">

        <?php foreach ($_SESSION['carrello'] as $prodotto) :  ?>

            <h4><?=$prodotto?></h4>

        <?php endforeach; ?>
    </div>

</body>
</html>

