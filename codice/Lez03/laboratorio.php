<?php

//array super globali 

//array scalari
// //                 0      1         2         3
// //$frutti = array('mela', 'pera', 'banana','fragola');
// $frutti = ['mela', 'pera', 'banana','fragola'];

// $quantiFrutti = count($frutti);

// //cicli for

// // for ($i = $quantiFrutti -1; $i >=0; $i--) {
// //      echo $frutti[$i];
// // }


// //foreach

// // foreach ($frutti as $frutto) {
// //     echo $frutto;
// // }

// $matrice = array( array(1,2), array(3,4)  );

// $matrice = [
//     [1,2],
//     [3,4]
// ];

// for ($i=0; $i < count($matrice); $i++) { 
    
//     for ($j=0; $j < count($matrice[$i]); $j++) { 
//         echo $matrice[$i][$j];

//     }
    
//     echo '<br>';
// }

//array associativi

 $regioni = [
     "Piemonte"=>"Torino",
     "Lombardia"=>"Milano",
     "Campania"=>"Napoli",
     "Lazio"=>"Roma",

];
 function addRegione($regione) {
     global $regioni;//global mi fa vedere la variabile nel corpo della funzione
    foreach ($regione as $key => $value) {
        $regioni[$key]= $value;
        
    }
}

//echo $mioFile = file_get_contents("regioni.txt");

$mioFile = file("./regioni.txt");

foreach ($mioFile as $riga) {

    $parole = explode(",", $riga);
    
    addRegione([$parole[0]=>$parole[1]]);
}



// foreach ($regioni as $key => $value) {
//     echo $key .": ". $value .'<br>';
// }


// foreach ($_POST as $key => $value) {
//     echo $key .": ". $value .'<br>';
// }

// echo "<pre>";
// var_dump($regioni);
// echo "</pre>";


echo json_encode($regioni);