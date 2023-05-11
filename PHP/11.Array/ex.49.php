<?php
    $nome = 'polar';$raca = "vira-lata";$idade = "4 anos"; $sexo = 'feminino';
    $cao = compact("nome", "raca","idade","sexo");
    foreach($cao as $caract => $value){
        echo "$caract : $value <br>";    
    }