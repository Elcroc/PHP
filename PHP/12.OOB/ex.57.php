<?php
class Animal
{
    public $patas;
    public $familia;
    public $cor;

    function __construct($patas, $familia, $cor)
    {
        $this->patas = $patas;
        $this->familia = $familia;
        $this->cor = $cor;
    }
}
$polar = new Animal(4, "cachorro", "branca");

echo "O Animal é um $polar->familia da cor $polar->cor e tem $polar->patas patas. <br>";