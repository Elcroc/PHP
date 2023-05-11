<?php
    function defineCorCarro ($x = "VERMELHA"){
        return "A cor do carro é $x <br>";
    }
   $carro = defineCorCarro();
   echo $carro;
   $carro = defineCorCarro("Azul");
    echo $carro;