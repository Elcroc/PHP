<?php
    $x = "Jesiel Mamedes Silva Junior";
    echo strlen ($x) . "<br>";
    for ($i=0; $i < strlen($x); $i++) { 
        echo "$x[$i]  <br>";
    }
    $a = "         string 1              . ";
    echo $a . "<br>";
    $a = ltrim($a);
    $a = str_replace(' ', '', $a);
    echo $a . "<br>";
    $t = "<p>TESTANDO</p><div>um texto</div>    <p>cheio de tag </p> <br>";
    echo $t;
    echo "<br>" . strip_tags($t);
     echo strrev($x) . "<BR>";
    echo str_repeat ($x , 3) . "<br>";
    $arr = explode (" ",$x);
    print_r ($arr);
    
    $m = implode("Lindo" , $arr);
    echo "<br>" . $m;
    $url = "www.casasbahia.com.br";
    $url2 = parse_url($url);
    print_r( $url2);