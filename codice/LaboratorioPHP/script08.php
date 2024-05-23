<?php


$gira = true;

$contatore = 0;

while ($contatore < 30) {

    //echo "sto girando".'<br>';

  
    if (rand(1,100) > 98) {
  //      return;
        break;
        //$gira = false;
    }


    $contatore++;
}

do {
    //echo "gira";
} while (false);



for ($i=0; $i < 10; $i++) { 

    if ($i==5) break;
   echo "$i"."<br>";
}