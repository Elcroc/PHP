<?php

class Calculadora {
    public function somar ($a , $b){
        $a = $a + $b;
        return $a;
    }
    public function subtrair ($a , $b){
        $a = $a - $b;
        return $a;

    }
    public function multiplicar ($a , $b){
        $a = $a * $b;
        return $a;

        }
    public function dividir ($a , $b){
        $a = $a / $b;
        return $a;

        
     }
}
$cal = new Calculadora;
echo $cal->somar (5,9);
echo $cal->subtrair (5,9);
echo $cal->multiplicar (5,9);
echo $cal->dividir (5,9);




