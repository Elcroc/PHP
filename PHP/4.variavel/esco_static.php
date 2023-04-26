<?php
    function test (){
        $x = 1;
        $x++;
        echo "valor de x é :$x <br>";
    }
    function test1 (){
        static $x = 1;
        $x++;
        echo "valor de x é :$x <br>";
    }
    test();
    test();
    test();
    test1();
    test1();    
    test1();

