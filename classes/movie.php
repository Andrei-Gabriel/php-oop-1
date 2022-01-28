<?php

    class Movie {
        public $title;
        public $year;
        public $time;
        public $IMDbRating;
        public $director;
        public $attori;

        public function __construct($_title, $_year, $_time, $_IMDbRating, $_director, $_attori) {
            $this->title = $_title;
            $this->year = $_year;
            $this->time = $_time;
            $this->IMDbRating = $_IMDbRating;
            $this->director = $_director;
            $this->attori = $_attori;
        }
        public function IsABeautifulFilm() {
            foreach($this->attori as $attore){
                // var_dump($attore);
                if($attore == "Chuck Norris"){
                        return $this->IMDbRating = "∞";
                }
            }
            return $this->IMDbRating;
        }
    }
?>