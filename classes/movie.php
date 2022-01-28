<?php

    class Movie {
        public $title;
        public $year;
        public $time;
        public $IMDbRating;
        public $director;
        public $stars = []

        public function __construct($_title, $_year, $_time, $_IMDbRating, $_director, $_stars) {
            $this->title = $_title;
            $this->year = $_year;
            $this->time = $_time;
            $this->IMDbRating = $_IMDbRating;
            $this->director = $_director;
            $this->stars = $_stars;
        }

        public function IsABeautifulFilm() {
            foreach($stars as $star){
                if($star == "Chuck Norris"){
                    $this->IMDbRating = "∞";
                }
            }
        }
    }

?>