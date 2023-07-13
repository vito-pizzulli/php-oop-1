<?php
    class Movie {
        public $title;
        public $original_title;
        public $description;
        public $genre;
        public $rating;
        public $release_date;
        public $length_in_minutes;
        public $language;

        function __construct(String $title, String $original_title, String $description, String $genre, String $rating, String $release_date, Int $length_in_minutes, String $language) {
            $this->title = $title;
            $this->original_title = $original_title;
            $this->description = $description;
            $this->genre = $genre;
            $this->rating = $rating;
            $this->release_date = $release_date;
            $this->length_in_minutes = $length_in_minutes;
            $this->language = $language;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP8 1</title>
</head>
<body>
    
</body>
</html>