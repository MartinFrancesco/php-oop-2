<?php
    //CLASSE Generale
    class Product {
        //Proprietà
        public $title;
        public $number;
        public $player;

        //Costruttore
        public function __construct($title , $number , $player) {
            $this->title = $title;
            $this->number = $number;
            $this->player = $player;
        }
    }
?>