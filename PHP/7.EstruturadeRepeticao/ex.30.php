<?php 
    $x = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    $y = [10];
    $z = [];$c = 0;
    for ($i=0; $i < 20 ; $i++) { 
        if ($x[$i] % 2 == 0 ){
            echo $x[$i] . "<br>";
        }
    }
    for ($i=0; $i < 10 ; $i++) { 
       array_push($y,$i);
        print_r ($y);
       
        echo"<br>";
    }
    for ($i=10; $i < 20 ; $i++){        
       
        array_push($z,$i);        
       }       
       
       for ($i=0; $i < count($z); $i++) {        
       
       if ($z[$i] % 2 != 0){
         echo $z[$i] . "<br>";
       }   
    } 
    