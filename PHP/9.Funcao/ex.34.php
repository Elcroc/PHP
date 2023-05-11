<?php
    function verifc($x){
        if($x % 2 == 0){
            echo "O Numero $x é Par <br>";
        }else{
            echo "O Numero $x é Impar <br>";
        }
    }
    verifc(123);
    verifc(100);