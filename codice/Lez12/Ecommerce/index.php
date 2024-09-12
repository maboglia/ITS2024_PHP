<?php
session_start();

include './db_prodotti.php';

include './login.php';

if (  !isset($_SESSION['carrello'])  ){
    $_SESSION['carrello'] = [];
}

$prodotto = $_POST['prodotto'] ?? '';

if ($prodotto != '' && isset($_SESSION['logged'])){
    $_SESSION['carrello'][] = $prodotto;//array_push()
}


//var_dump($_SESSION);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        td>img {width: 100px;}
    </style>
</head>
<body>
    <div class="container">


<?php include './view_logout.php'; ?>
<?php include './view_login.php'; ?>

    <table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Prezzo</th>
            <th>Image</th>
            <th>Azione</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($prodotti as $prodotto) : ?>
            
            <tr>
                <td><?= $prodotto->getTitle() ?></td> 
                <td><?= $prodotto->getPrice() ?></td>
                <td><img class="img img-responsive" src='<?= $prodotto->getImage() ?>'></td>
                <td><form action="" method="post">
                    <input type="hidden" name="prodotto" value="<?= $prodotto->getTitle() ?>">
                    <input class="btn btn-success" type="submit" value="Metti nel carrello">
                    </form>
                </td>
            </tr>    
            
            <?php endforeach; ?>
            
    </tbody>
    </table>

    </div>
</body>
</html>

