<?php
    require_once "./models/classes.php";
?>

<?php
    $movies = [
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
        ),
    
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
        ),
    
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
        ),
    ];
?>