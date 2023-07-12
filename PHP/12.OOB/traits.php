<?php
    trait Objeto {
        public function test (){
            echo "testando o traite de objeto <br>";
        }
    }
    class Central {
        use Objeto ;
    }
    $x = new Central;
    $x->test();