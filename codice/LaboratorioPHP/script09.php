<?php

$voti = array(28,25,26,27,18,19,30,28);

$voti2 = [28,25,26,27,18,19,30,28];

$totale = 0;

for ($i=count($voti)-1; $i >= 0; $i--) { 
    echo $voti[$i];
}

foreach ($voti2 as $voto) {
    echo $i++.': '. $voto.'<br>';
}

$media = $totale / count($voti);

echo $media;

$zaino = ["string", 12, 13.4, true, [1,2,3]];

$temperature = [
    ["citta"=>"torino", "temp" => 23.5],
    ["citta"=>"milano", "temp" => 22.5],
    ["citta"=>"napoli", "temp" => 21.5],
    ["citta"=>"roma", "temp" => 21.5],

];

foreach ($temperature as $comune) {
    echo $comune['citta'] . ': ' . $comune['temp'];
}

