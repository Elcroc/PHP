<?php
    class Carro {
        public $velocidadeMaxima;
        public $portas = 4;
        public  $cor = "preto";
        public  $ano = 2023;
        function setVelocidadeMaxima ($velo){
            $this ->velocidadeMaxima = $velo;
        }
        function getVelocidadeMaxima (){
            echo " A velocidade maxima é: $this->velocidadeMaxima km/h <br>";
        }
    }

    $palio = new Carro;

    $palio->setVelocidadeMaxima(150);

    $palio->getVelocidadeMaxima();