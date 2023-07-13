<?php
    include_once __DIR__ . '/Models/Movie.php';
    include_once __DIR__ . '/Models/Genres.php';

    $harryPotter1 = new Movie(
        "Harry Potter e la Pietra Filosofale",
        "Harry Potter and the Philosopher's Stone",
        "L'undicenne Harry Potter, rimasto orfano all'età di un anno, è stato cresciuto dai perfidi zii che non esitano a vessarlo e mortificarlo. Fino a quando, grazie ad una lettera che gli viene recapitata magicamente, non scopre la sua vera identità. Harry è in realtà un mago, possiede enormi poteri e deve iniziare a frequentare il primo anno della scuola speciale di Hogwarts. È l'inizio di una magica avventura, dove lo attendono importanti amicizie, prove difficili e pericoli mortali.",
        new Genres("Avventura", "Fantasy", ""),
        "7,6",
        "06/12/2001",
        "152",
        "Italiano"
    );

    $spidermanNoWayHome = new Movie(
        "Spider-Man: No Way Home",
        "Spider-Man: No Way Home",
        "In seguito agli eventi di Spiderman: Far From Home, in cui il malvagio Mysterio rivela al mondo intero che Spiderman è Peter Parker, quest’ultimo, ricercato dalle forze dell’ordine, decide di ricorrere all’aiuto del Doctor Strange. Il mago può infatti lanciare un incantesimo in grado di far dimenticare al mondo che Peter Parker sia Spiderman. Tuttavia, nonostante l’incantesimo venga lanciato e abbia apparentemente successo, qualcosa non va come previsto; infatti, giungono dal Multiverso tutti i super cattivi che sanno che Peter è l’Uomo Ragno. Ha inizio così per il giovane supereroe una corsa contro il tempo per sconfiggere tutti i suoi avversari e porre rimedio al disastroso incantesimo di Strange.",
        new Genres("Azione", "Avventura", "Fantasy"),
        "8,2",
        "17/12/2021",
        "142",
        "Italiano"
    );

    $unaNotteDaLeoni = new Movie(
        "Una Notte da Leoni",
        "The Hangover",
        "Per festeggiare al meglio il matrimonio del comune amico Doug, i tre sodali Phi, Stu e Alan hanno organizzato un grandioso addio al celibato in quel di Las Vegas. Una notte che nelle intenzioni non dovrebbero dimenticare mai e della quale invece non serbano ricordo la mattina successiva, quando si risvegliano nella loro camera e scoprono che il futuro sposo è scomparso nel nulla. In più a Stu manca un dente, la suite dell'hotel è nel caos totale, finiscono per ritrovarsi faccia a faccia con una tigre e scovano un bambino nell'armadio. Per cercare di scoprire cosa sia successo e dove sia finito Doug i tre vivranno una serie di paradossali disavventure.",
        new Genres("Commedia", "", ""),
        "7,7",
        "19/06/2009",
        "100",
        "Italiano"
    );

    $laLeggendaDiAlJohnEJack = new Movie(
        "La Leggenda di Al, John e Jack",
        "La Leggenda di Al, John e Jack",
        "A New York, negli anni Cinquanta, un boss decide di assoldare tre gangster per eliminare un pericoloso concorrente, Frankie. Il problema è che i tre sono malavitosi piuttosto eccentrici e, per colmo di sfortuna, uno di loro, Al, dopo un traumatico incidente perde la memoria. Dopo aver sbagliato clamorosamente bersaglio, il terzetto (composto anche da John e Jack) decide di nascondersi per evitare le ire del boss. Dopo essere stati catturati, Al, John e Jack hanno una sola speranza di salvare la propria vita: proteggere una persona molto cara al boss.",
        new Genres("Commedia", "Poliziesco", ""),
        "6,4",
        "13/12/2002",
        "105",
        "Italiano"
    );

    $theButterflyEffect = new Movie(
        "The Butterfly Effect",
        "The Butterfly Effect",
        "Evan Treborn ha perso la memoria del tempo. La sua infanzia è segnata da una serie di eventi terrificanti che hanno coinvolto i suoi amici Kayleigh, Lenny e Tommy, ma che egli non può ricordare. Incoraggiato dallo psicologo e dalla madre ha però tenuto fin da piccolo un diario in cui registra dettagliatamente la sua vita. Dopo molti anni, lo legge casualmente e all'improvviso si trova scaraventato nel passato: è bambino, ma con la mente da adulto. Per questo pensa di poter intervenire sugli eventi per cambiare il presente.",
        new Genres("Drammatico", "Fantascienza", "Thriller"),
        "7,6",
        "27/02/2004",
        "113",
        "Italiano"
    );
?>