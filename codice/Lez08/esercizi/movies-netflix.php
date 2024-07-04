<?php

$movies = file_get_contents("https://raw.githubusercontent.com/maboglia/ProgrammingResources/master/tabelle/film/best-netflix-movies-rt.json");


//header("content-type:application/json");

$film_php = json_decode($movies, true);



// echo "<pre>";
// var_dump($film_php);
// echo "</pre>";


foreach ($film_php as $film) {
    
    foreach ($film as $key => $value) {
        echo"". $key ."". $value ."<br>";
    }


}



