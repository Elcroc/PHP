<?php
    $arr = range (10 , 45);
    for ($i=0; $i <count($arr) ; $i++) { 
        if ($arr[$i] + 6 > 30){
            echo "<br> NUMERO MUITO ALTO : " . $arr[$i] + 6;
        } else{
            echo  $arr[$i] + 6 . "<br>";
        }
    }