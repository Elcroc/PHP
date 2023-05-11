<?php
    $x = "Carro - Telefone - Barco - Balsa - Jetline - Valentina";
    $y = explode ("-" , $x);
    for ($i=0; $i < count($y) ; $i++) {
        echo "$y[$i] <br>";
    }