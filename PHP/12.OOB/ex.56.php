<?php
    class Humano {
        public $idade = 28;
        public $sexo = "feminino";
        public function falar(){
            echo "olá Mulher de 28 anos";
        }
    }
    class Professor extends Humano {
        public $materia = "ingles";
        public function habla (){
            echo "O Professor está lecionando $this->materia <br>";
        }
    }
    $angela = new professor;
    $angela->falar();
    $angela->habla();
    if ($angela instanceof Humano){
        echo "Ela é humana <br>";
    }else{
        echo "Ela não é Humana";
    }
    if ($angela instanceof Professor){
        echo "Ela é Professora <br>";
    }else{
        echo "Ela não é professora ";
    }