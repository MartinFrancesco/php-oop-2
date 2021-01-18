<?php
    //INCLUDE Classe Generale
    include_once __DIR__ . '/Product.php';

    //EXTEND Classe Generale
    class Celebrities extends Product {
        public $season;

        //Costruttore
        public function __construct($title , $number , $player , $season){
            //Settare i valori nella classe generale
            parent::__construct($title , $number , $player);    
            //Setttare i valori nella classe figlio
            $this->season = $season;       
        }
    }
?>