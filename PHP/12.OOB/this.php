<?php
    Class Animal {
        public $nome;
        function escolherNome ($nome){
            $this -> nome = $nome;
        }
    }
    $lili = new Animal;   
    echo "o nome do gatinho é $lili->nome  <br>";
    $lili -> escolherNome("Lilith");
    echo "o nome do gatinho é $lili->nome  <br>";
 
