<?php

    $maglie = [
        "maglia blu"=> "12",
        "maglia verde"=> "14",
        "maglia rossa"=> "16",
        "maglia gialla"=> "18",
    ];

    $pantaloni = [
        "pantalone blu"=> "22",
        "pantalone verde"=> "24",
        "pantalone rosso"=> "26",
        "pantalone giallo"=> "28",
    ];


    // $result = array_merge($maglie, $pantaloni);

    // foreach ($result as $prodotto => $prezzo) {
    //     print_r($prodotto);
    //     print_r($prezzo);

    // }

       
    header("Content-Type:application/json");
    echo json_encode(array_merge($maglie, $pantaloni));    


?>