<?php
    class Animal {
        function latir (){
            echo "AU AU AU <BR>";
        }
        function andar ($x){
            echo "tap tap tap  andou $x metros <br>";
        }
    
    }
    $polar = new Animal;
    $polar -> latir();
    $polar -> andar(50);
    $amora = new Animal;
    $amora -> latir();
    $amora -> andar(980);

