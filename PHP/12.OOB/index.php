<?php
    class Animal {
        function latir (){
            echo "AU AU AU <BR>";
        }
        public $patas = 4;
        public $dentes = 1;
        public const OLHOS = 2;
        protected $orelhas = 3;
        private $fucinho = 2;
    }
    $polar = new Animal;
    $polar->latir();
    echo $polar ->patas . "<br>";
    $polar -> dentes = 50;
    echo $polar ->dentes . "<br>";
    echo $polar :: OLHOS  . "<br>";
