<?php
    function soma (){
        $a = 5;
        $b = 7;
        echo $a + $b ."<br>";
    }
    soma (); 
    function texto ($x){
        if(is_string($x)){
        echo "OLÁ $x <BR>";
        }
        else {
            echo "OLA ERROR!!! <BR>";
        }
    }
    function unir ($x ,$z){
        echo $x . " $z <br>";
    }
    texto('JESIEL');
    texto('JUNIOR');
    texto(21);
    unir("Jesiel" , "Junior");
    function somatoria($x , $y){
        print_r(func_get_args());
        echo func_num_args() . "<br>";
        return $x + $y;
    }
    $n = somatoria (32,21);
    echo $n . "<br>";

    $G = [2,3,4,"Jesiel"];
    var_dump ($G);
    echo "<br>";
    print_r ($G);

