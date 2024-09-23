<?php

    $myFile = "./docs/prodotti.txt";

    $fh = fopen($myFile, 'w');
    
    $frase1 = "maglia rossa, 10\n";
    
    fwrite($fh, $frase1);
    $frase2 = "cappello blu, 12\n";
    fwrite($fh, $frase2);
    
    fclose($fh); 


?>