<?php
$myFile = "https://raw.githubusercontent.com/maboglia/ProgrammingResources/refs/heads/master/tabelle/libri/Biblioteca.csv";

$editore = 'Mondadori';

function scrivi($filedascrivere, $stringadascrivere){

    $risorsa = fopen($filedascrivere, 'a');

    fwrite($risorsa, $stringadascrivere);

    fclose($risorsa);

}

// $fh = fopen($myFile, 'r');
// $leggo = fread($fh, filesize($myFile));
// fclose($fh);
// echo $leggo;

//$miofile = file_get_contents($myFile);

$miofile = file($myFile);

foreach ($miofile as $riga) {
    echo $riga;

   if ( str_contains($riga, $editore))   {
        scrivi('./docs/' .$editore . '.txt', $riga  );
   }
    //echo $riga .'<br>';

}


//var_dump($miofile);

?>