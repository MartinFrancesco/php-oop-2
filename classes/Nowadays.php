<?php
    //INCLUDE Classe Generale
    include_once __DIR__ . '/Product.php';

    //EXTEND Classe Generale
    class Nowadays extends Product {
        public $rating;

        //Costruttore
        public function __construct($title , $number , $player , $rating){
            //Settare i valori nella classe generale
            parent::__construct($title , $number , $player);    
            //Setttare i valori nella classe figlio
            $this->rating = $rating;       
        }
    }
?>