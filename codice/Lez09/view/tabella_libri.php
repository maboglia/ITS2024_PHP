<?php include_once '../repos/LibroDAO.php';?>
<?php $dao = new LibroDAO();?>

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

    <?php include_once '../view/form_libro.html'; ?>

    <h1>Libreria</h1>

    <table class="table table-striped">
        <tr>
            <th>titolo</th>
            <th>pagine</th>
            <th>prezzo</th>
            <th>autore</th>
        </tr>
        
        <?php foreach ($dao->getLibri() as $libro):  ?>
            <tr>
                <td><?=$libro->titolo?></td>
                <td><?=$libro->pagine?></td>
                <td><?=$libro->prezzo?></td>
                <td><?=$libro->autore?></td>
            </tr>
            
    <?php endforeach; ?>
    </table>

    </div>    
</body>
</html>