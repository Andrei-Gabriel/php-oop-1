<?php

    class Movie {
        public $title;
        public $year;
        public $time;
        public $IMDbRating;
        public $director;
        // public $attori[];

        public function __construct($_title, $_year, $_time, $_IMDbRating, $_director/*, $_attori[]*/) {
            $this->title = $_title;
            $this->year = $_year;
            $this->time = $_time;
            $this->IMDbRating = $_IMDbRating;
            $this->director = $_director;
            // $this->attori = $_attori;
        }

        public function IsABeautifulFilm() {
            if($this->IMDbRating >= 8){
                return $this->IMDbRating = $this->IMDbRating. ' BEAUTIFUL';
            } else {
                return $this->IMDbRating;
            }
        }
        // public function IsABeautifulFilm() {
        //     foreach($this->movies as $this->movie){
        //         foreach($this->movie as $this->actors => $this->attori){
        //             if($this->attori == "Chuck Norris"){
        //                 $this->IMDbRating = "∞";
        //             }
        //         }
        //     }
        // }
    }

?>