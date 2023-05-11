<?php
    function eu ($x , $y){
        if (is_string($x)){
            if (is_int($y)){
                echo "Olá eu sou $x e tenho $y anos <br>";
            }
            else {
                echo "Idade no Formato ERRADO<BR>";
            }
        }else {
            echo "Nome no FORMATO ERRADO<BR>";
        }        
    }
    eu("Jesiel" , 28);
    eu(28 , 28);
    eu("Jesuel" , 8.59);