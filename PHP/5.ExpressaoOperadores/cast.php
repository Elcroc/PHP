<?php
    $x = (float) "5.987";
    $x = $x + 2;
    echo "$x <br>";
    if ($x === 7.987){
        echo "é float";
    }
    $x = (string) 5.987;   
    echo "$x <br>";
    if ($x === "5.987"){
        echo "é string";
    }