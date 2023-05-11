<?php
    $arr[1] = 5;
    print_r ($arr);
    echo "<br>";
    $arr[5] = 52;
    print_r ($arr);
    echo "<br>";
    $arr[1] += 5;
    print_r ($arr);
    echo "<br>";
    $arrAss["pessoas"] = 5;
    print_r ($arrAss);
    echo "<br>";
    $arrAss["lugar"] = "Escola";
    print_r ($arrAss);
    echo "<br>";
    $arrAss["professores"] = 1;
    print_r ($arrAss);
    echo "<br>";
    $arrAss["professores"] = 3;
    print_r ($arrAss);
    echo "<br>";
    $arr[] = 23;
    print_r ($arr);
    echo "<br>";
    $x = range (0,20);
    print_r ($x);
    echo "<br>";
    $pessoa  = ["Jesiel" , true , "18.2" , "verde"];
    list ($nome , $humano ,$tamanho ,$cor ) = $pessoa;
    echo " $nome - $humano - $tamanho - $cor <br> ";
    $slice = array_slice($pessoa , 1 , 2);
    print_r ($slice) ;
    echo "<br>";  
    print_r (array_chunk($x , 2));
    $carro = [
        'marca' => 'Palio',
        'motor' => 1.0,
        'teto_solar' => false,
        'cambio' => 'manual',
        'portas' => 4
    ];
    $arr_key = array_keys ($carro);
    $arr_val = array_values ($carro);
    print_r ($carro);
    echo "<br>";
    print_r ($arr_key);
    echo "<br>";
    print_r ($arr_val);
    echo "<br>"; 
    if (array_key_exists ("marca" , $carro)){
        echo "Existe <br>";
    }
    if (isset($carro['portas'])){
        echo "Existe <br>";
    }
    $remove = array_splice($carro ,1,2);
    print_r ($carro);
    echo "<br>";
    print_r ($remove);
    echo "<br>";
    $num = [212,32,43,4,54,6,6,7,28,8,8,8,8,8,8,2];
    function soma ($x,$y){
        return $x+ $y ;
    }
    $resul = array_reduce($num , "soma");
    echo $resul . "<br>"; 
    if (in_array("2" , $num)){
        echo "Esta <br>";
    }
    sort($num);
    print_r($num); 
    echo "<br>"; 
    arsort($carro);
    shuffle ($num);
    print_r($num); 
    echo "<br>"; 
    $sum  = array_sum($num);
    print_r($sum); 
    echo "<br>"; 
    $ame = array_merge($num  , [2,3,1234]);
    print_r($ame); 
    echo "<br>"; 
    $diff = array_diff($ame , $num);
    print_r($diff); 
    echo "<br>"; 