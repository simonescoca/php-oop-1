<?php
    /**
        Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
            è definita una classe ‘Movie’ :
                => all'interno della classe sono dichiarate delle variabili d'istanza
                => all'interno della classe è definito un costruttore
                => all'interno della classe è definito almeno un metodo
            vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

        Bonus 1:
            Modificare la classe Movie in modo che accetti piú di un genere.

        Bonus 2:
            Creare un layout completo per stampare a schermo una lista di movies. Facciamo attenzione all’organizzazione del codice,
            suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
            creando un file dedicato ai dati (array di oggetti) che potremmo chiamare db.php
            mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
            organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
    */
?>

<?php
    class Movie {
        public string $og_title;
        public string $director;
        public string $og_language;
        public int $release_year;
        public array $genre;
        public int $runtime_min;
        public array $actors;
        public string $plot;
        public string $poster;
        public float $rating;
        public static string $aspect_ratio = "16:9";
    
        function __construct
        (
            string $og_title,
            string $director,
            string $og_language,
            int $release_year,
            array $genre,
            int $runtime_min,
            array $actors,
            string $plot,
            string $poster,
            float $rating
        )
        {
            $this->og_title = $og_title;
            $this->director = $director;
            $this->og_language = $og_language;
            $this->release_year = $release_year;
            $this->genre = $genre;
            $this->runtime_min = $runtime_min;
            $this->actors = $actors;
            $this->plot = $plot;
            $this->poster = $poster;
            $this->rating = $rating;

        }
    
        public function getMovieLength() {
            if ($this->runtime_min >= 120) {
                return "Long runtime";
            } elseif ($this->runtime_min > 90 && $this->runtime_min < 120) {
                return "Medium runtime";
            } else {
                return "Short runtime";
            }
        }
    }
?>

<?php
    $the_dark_knight = new Movie
    (
        "Batman: The Dark Knight",
        "Christopher Nolan",
        "EN",
        2008,
        ["Action", "Noir", "Superheroes", "Thriller", "Dramatic"],
        152,
        ["Christian Bale", "Heath Ledger", "Gary Oldman", "Aaron Eckhart", "Morgan Freeman", "Michael Caine", "Maggie GyllenHall", "Cillian Murphy"],
        "Batman and Jim Gordon team up with Gotham City's new district attorney, Harvey Dent, to fight organized crime that is rampant in the city and stop a dangerous robber, the Joker, who has thrown the city into anarchy.",
        "https://wallpapercave.com/wp/wp383267.jpg",
        4.65
    );

    $the_last_samurai = new Movie
    (
        "The Last Samurai",
        "Edward Zwick",
        "EN",
        2003,
        ["Action", "War", "History", "Dramatic"],
        154,
        ["Tom Cruise", "Ken Watanabe", "Hiroyuki Sanada", "Koyuki Katō", "Tony Goldwyn", "Shin Koyamada", "Timothy Spall", "Billy Connolly"],
        "Emperor Meiji recruits an American commander, Nathan Algren, to train his troops in the use of firearms. In battle, Algren is captured and spared by the enemy, who will instruct him in their customs and code of honor.",
        "https://images.alphacoders.com/309/thumb-1920-309473.jpg",
        4.2
    );

    $cars = new Movie
    (
        "Cars",
        "John Lasseter",
        "EN",
        2006,
        ["Animation", "Adventure", "Comedy"],
        116,
        ["Owen Wilson", "Larry the Cable Guy", "Paul Newman"],
        "Lightning McQueen, a hotshot rookie race car, gets waylaid in Radiator Springs, a forgotten town on Route 66. There, he finds the true meaning of friendship and family.",
        "https://wallpaperaccess.com/full/470176.jpg",
        4.4
    );
?>