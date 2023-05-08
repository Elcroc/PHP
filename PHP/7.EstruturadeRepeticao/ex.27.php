<?php
    $q = [ 10 , 23.1 , "jesiel " , "tyrson " , true , [] , "matheus" , false , 5];
    $i = count($q);
    $y = 0;
    $c = 10;
    while ($y < $i){
        if  (is_string($q[$y])) {
            echo $q[$y] . "<br>";
        }

        $y++;
    }
    while ($c > 0){

        echo $c . "<br>";
        if ($c === 8){
           echo "Loop encerrado";
            break;
        }
        $c--;
    }
    