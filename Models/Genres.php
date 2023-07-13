<?php
    class Genres {
        public $genre_1;
        public $genre_2;
        public $genre_3;

        function __construct(String $genre_1, String $genre_2, String $genre_3) {
            $this->genre_1 = $genre_1;
            $this->genre_2 = $genre_2;
            $this->genre_3 = $genre_3;
        }
    }
?>