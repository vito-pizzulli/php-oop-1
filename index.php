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

        function __construct(String $title, String $original_title, String $plot, String $genre, String $rating, String $release_date, Int $length_in_minutes, String $language) {
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
            echo '<ul><li> Titolo: ' . $this->title . '</li>';
            echo '<li> Titolo originale: ' . $this->original_title . '</li>';
            echo '<li> Trama: ' . $this->plot . '</li>';
            echo '<li> Genere: ' . $this->genre . '</li>';
            echo '<li> Voto: ' . $this->rating . '</li>';
            echo '<li> Data di uscita: ' . $this->release_date . '</li>';
            echo '<li> Lunghezza: ' . $this->length_in_minutes . ' minuti </li>';
            echo '<li> Lingua: ' . $this->language . '</li></ul>';
        }
    }

    $harry_potter_1 = new Movie(
        "Harry Potter e la Pietra Filosofale",
        "Harry Potter and the Philosopher's Stone",
        "L'undicenne Harry Potter, rimasto orfano all'età di un anno, è stato cresciuto dai perfidi zii che non esitano a vessarlo e mortificarlo. Fino a quando, grazie ad una lettera che gli viene recapitata magicamente, non scopre la sua vera identità. Harry è in realtà un mago, possiede enormi poteri e deve iniziare a frequentare il primo anno della scuola speciale di Hogwarts. È l'inizio di una magica avventura, dove lo attendono importanti amicizie, prove difficili e pericoli mortali.",
        "Fantasy",
        "7,6",
        "06/12/2001",
        "152",
        "Italiano"
    );

    $spiderman_no_way_home = new Movie(
        "Spider-Man: No Way Home",
        "Spider-Man: No Way Home",
        "In seguito agli eventi di Spiderman: Far From Home, in cui il malvagio Mysterio rivela al mondo intero che Spiderman è Peter Parker, quest’ultimo, ricercato dalle forze dell’ordine, decide di ricorrere all’aiuto del Doctor Strange. Il mago può infatti lanciare un incantesimo in grado di far dimenticare al mondo che Peter Parker sia Spiderman. Tuttavia, nonostante l’incantesimo venga lanciato e abbia apparentemente successo, qualcosa non va come previsto; infatti, giungono dal Multiverso tutti i super cattivi che sanno che Peter è l’Uomo Ragno. Ha inizio così per il giovane supereroe una corsa contro il tempo per sconfiggere tutti i suoi avversari e porre rimedio al disastroso incantesimo di Strange.",
        "Action",
        "8,2",
        "17/12/2021",
        "142",
        "Italiano"
    );

    echo $harry_potter_1->getMovieInfo();
    echo $spiderman_no_way_home->getMovieInfo();
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