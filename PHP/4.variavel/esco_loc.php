<?php
    $x = 10;
    Function local(){
        $x = 5;
        echo "$x <br>";
    }
    echo "$x global <br>";
    local();
    function test(){
        $x = 12;
        echo "$x local <br>";
    }
    test();