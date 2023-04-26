<?php
    class Pessoa {
        function falar(){
            echo "Yess Quenn";
        }
    }
    $Jesiel = new Pessoa();

    $Jesiel->nome = "Jesiel";

    echo $Jesiel->nome;
    ECHO "  disse : "; echo $Jesiel->falar();