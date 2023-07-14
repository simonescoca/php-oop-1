<?php

    /**
        Crea una classe Indumento che ha un materiale come proprieta' da popolare nel costruttore.

        Crea due sottoclassi Scarpa e Cappello, che avranno una proprieta' speciale ognuna 
        oltre a richiamare il costruttore del parent. 

        Istanziare un indumento, una scarpa e un cappello con il var_dump e verificare 
        su schermo le differenze. 
    */

    class Indumento {
        private $materiale;

        public function __construct (string $materiale) {
            $this->materiale = $materiale;
        }

        public function getMateriale () {
            return $this->materiale;
        }
    }

    class Scarpa extends Indumento {
        private $taglia;

        public function __construct (string $materiale, int $taglia) {
            parent::__construct ($materiale);
            $this->taglia = $taglia;
        }

        public function getTaglia () {
            return $this->taglia;
        }
    }

    class Cappello extends Indumento {
        private $colore;

        public function __construct (string $materiale, string $colore) {
            parent::__construct ($materiale);
            $this->colore = $colore;
        }

        public function getColore () {
            return $this->colore;
        }
    }

    $indumento = new Indumento ('cotone');
    $scarpa = new Scarpa ('pelle', 42);
    $cappello = new Cappello ('lana', 'verde');

    var_dump ($indumento);
    var_dump ($scarpa);
    var_dump ($cappello);
?>