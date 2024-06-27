<?php

    include_once '../model/punto.php';
    include_once '../model/segmento.php';
    include_once '../model/triangolo.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Geometria</h1>

    <?php

        $a = new Punto(3,2);
        $b = new Punto(7,2);
        $c = new Punto(3,5);

        $triangolo = new Triangolo($a, $b, $c);

    ?>

    <p><?= $triangolo  ?></p>

</body>
</html>