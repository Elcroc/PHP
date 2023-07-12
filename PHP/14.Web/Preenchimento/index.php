<?php
$usuario = [
    'nome' => 'Jesiel',
    'idade' => 29,
    'profissao' => 'programador'
];
if ($usuario) {
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <div>
            <input type="texte" name="nome" placeholder="Coloque o nome" value = "<?= $nome ?>">
        </div>
        <div>
            <input type="texte" name="profissao" placeholder="Coloque o nome" value = "<?= $profissao ?>">
        </div>
        <div>
            <input type="texte" name="idade" placeholder="Coloque o nome" value = "<?= $idade ?>">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>  
</body>

</html>