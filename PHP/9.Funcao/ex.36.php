<?php
    function arra ($x){
        $y = [];
        for ($i=0;$i < count($x);$i++){            
           if ($x[$i] > 5){
            array_push($y , $x[$i] );
           } 
        }
        return $y;
    }
    $a = [1,2,3,4,5,6,7,8,9,10];
    $y = arra($a);
    print_r ($y);