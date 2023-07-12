<?php
    interface Caracteristicas {
        const nome = "Jesiel";
        public function falar ();
    }
    class Humano implements Caracteristicas {
        public $idade  = 28;
        public function falar (){
            echo "óla Mundo !! <br>";
        }
        public function meunome (){
            echo "Meu nome é " . self::nome . "<br>" ;
        }
    }
    $jesiel = new Humano;
    $jesiel->falar();
    $jesiel->meunome();