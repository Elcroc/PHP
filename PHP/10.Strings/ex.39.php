<?php
    $arr = [
        "camisa" => 250,
        "chinela" => 25,
        "celular g3" => 870,
        "computador" => 8792
    ];
    function corta ($x){
        $y = [];
        foreach ($x as $item => $preco) {        
            if ($preco> 50){
                array_push($y , $item) ;   
            }
        }
        return print_r ($y);
    }
    corta ($arr);