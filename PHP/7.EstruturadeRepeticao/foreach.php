<?php
// Criando o array com os dados da passagem
$passagem = array(
    "nome_passageiro" => "Jesiel Mamedes",
    "valor_passagem" => 100.00,
    "numero_poltrona" => 15,
    "data" => "2023-05-10",
    "hora" => "13:30"
);

// Mostrando os dados da passagem usando a função foreach
foreach ($passagem as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}
?>