<?php


class MoviesCtrl {

    private $movies = array();//[]

    public function scaricaFilm($nome_file){

        //echo $nome_file;

        $movies = file_get_contents($nome_file);

        $film_php = json_decode($movies, true);
    // var_dump($film_php);

        foreach ($film_php as $film) {
            
                $titolo = $film["titolo"];
                $regista = $film["regista"];
                $anno =  str_replace(['(', ')'], '', $film["anno"]);//(2024)
                $rating = str_replace('%','',$film["rating"]);//97%

                $miofilm = new Movie( $titolo, $anno, $rating, $regista  );
                $this->addMovie( $miofilm );

        }        

    }

    public function svuotaContenitore(){
        //unset($this->movies);
        $this->movies = array();
    }


    public function addMovie($movie) {
        $this->movies[] = $movie;
    }

    public function getMovies() {
        return $this->movies;
    }

    public function getMovieByTitle($titolo) {
        foreach ($this->movies as $movie) {
            if ($movie->titolo == $titolo) {
                return $movie;
            }
        }
        return null;
    }

    public function getMoviesByRating($min=0, $max=100) {

        $films = array();
        foreach ($this->movies as $movie) {
            if ($movie->rating >= $min && $movie->rating <= $max) {
                $films[] = $movie;
                // array_push( $films, $movie);
            }
        }
        return $films;

    }



}



