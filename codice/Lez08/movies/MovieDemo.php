<?php

include("Movie.php");
include("MoviesCtrl.php");


$controller = new MoviesCtrl();//costruito l'oggetto

/*
"titolo": ,
    "anno": "()",
    "rating": "%",
    "regista": "Babak Anvari"
*/

// $film1 = new Movie("Under the Shadow", 2016, 99, "Babak Anvari");

// $controller->addMovie($film1);
// $controller->addMovie($film1);
// $controller->addMovie($film1);
// $controller->addMovie($film1);
// $controller->addMovie($film1);

$controller->scaricaFilm("https://raw.githubusercontent.com/maboglia/ProgrammingResources/master/tabelle/film/best-netflix-movies-rt.json");


// foreach ($controller->getMovies() as $movie) {
//     echo '<h2><a href="https://www.google.it/search?q=' . $movie->titolo . '">' . $movie->titolo . '</a></h2>';
// }

$filmHighRating = $controller->getMoviesByRating(95,100);

header("content-type:application/json");
echo json_encode($filmHighRating);



?>