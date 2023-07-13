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
    require_once "./database/data.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./styles/style.css">
        <title>php-oop</title>
    </head>
    <body>
        <header class="py-5">
            <div class="d-flex justify-content-center container">
                <h1>
                    Movies
                </h1>
            </div>
        </header>
        <main>
            <div class="d-flex flex-column align-items-center container my_cards-container">
                <?php
                    foreach ($movies as $movie) {
                ?>
                        <div class="my_card">
                            <div class="my_img-container">
                                <img src="<?php echo $movie->poster; ?>" alt="<?php echo $movie->og_title; ?>">
                            </div>
                        </div>
                <?php
                    }
                ?>
            </div>
        </main>
    </body>
</html>