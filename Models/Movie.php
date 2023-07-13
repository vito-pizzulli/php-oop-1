<?php
    class Movie {
        public $title;
        public $original_title;
        public $plot;
        public $genre;
        public $rating;
        public $release_date;
        public $length_in_minutes;
        public $language;

        function __construct(String $title, String $original_title, String $plot, Genres $genre, String $rating, String $release_date, Int $length_in_minutes, String $language) {
            $this->title = $title;
            $this->original_title = $original_title;
            $this->plot = $plot;
            $this->genre = $genre;
            $this->rating = $rating;
            $this->release_date = $release_date;
            $this->length_in_minutes = $length_in_minutes;
            $this->language = $language;
        }

        public function getMovieInfo(){
            echo '<ul><li><h2> Titolo: ' . $this->title . '</h2></li>';
            echo '<li> Titolo originale: ' . $this->original_title . '</li>';
            echo '<li> Trama: ' . $this->plot . '</li>';
            echo '<li> Genere/i: ' . $this->genre->genre_1 . " " . $this->genre->genre_2 . " " . $this->genre->genre_3 . '</li>';
            echo '<li> Voto: ' . $this->rating . '</li>';
            echo '<li> Data di uscita: ' . $this->release_date . '</li>';
            echo '<li> Lunghezza: ' . $this->length_in_minutes . ' minuti </li>';
            echo '<li> Lingua: ' . $this->language . '</li></ul>';
        }
    }
?>