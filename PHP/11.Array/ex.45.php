<?php
    $arr = [[0,1,2,3],[3,4,5,6],[8,9,10,11],[12,13,14,15]];
    for ($i=0; $i <count($arr) ; $i++) { 
        echo "Sessão : " . $i +1 . "<br>"; 
        for ($j=0; $j < count($arr[$i]) ; $j++) { 
            echo $arr[$i][$j] . "<br>";
        }
    }