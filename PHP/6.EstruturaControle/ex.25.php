<?php
    $x = 55;
    if (is_numeric($x)){
        $y = $x * 2;
        if($y >= 100){
            echo " numero dentro de 2 if";
        }
    }else echo "não numerico";