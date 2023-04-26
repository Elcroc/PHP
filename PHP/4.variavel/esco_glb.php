<?php
    function local(){
        global $x;
        $x = 15;
        echo "x está valendo : $x <br>";
    }
    function local_1(){
        $x = 20;
        echo "x está valendo : $x <br>";
    }
    $x = 50;
    echo "x está valendo : $x <br>";
    local_1();
    echo "x está valendo : $x <br>";
    local();
    echo "x está valendo : $x <br>";
    