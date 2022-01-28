<?php

    class Movie {
        public $title;
        public $year;
        public $time;
        public $IMDbRating;
        public $director;

        public function __construct($_title, $_year, $_time, $_IMDbRating, $_director) {
            $this->title = $_title;
            $this->year = $_year;
            $this->time = $_time;
            $this->IMDbRating = $_IMDbRating;
            $this->director = $_director;
        }

        public function IsABeautifulFilm() {
            if($this->IMDbRating >= 8){
                return $this->IMDbRating = $this->IMDbRating. ' BEAUTIFUL';
            } else {
                return $this->IMDbRating;
            }
        }
    }

?>