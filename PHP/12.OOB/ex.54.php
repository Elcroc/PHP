<?php
    class Pessoa {
        public $nome = 'Jesiel';
        public $idade = 28;
        function andar ($x ) {
        echo " andou $x metros hoje";
        }
    }
    $eu = new Pessoa;
    $eu -> nome . "<br>";
    $eu -> idade . "<br>";
    $eu -> andar(8000); 
