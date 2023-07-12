<?php
$validacao = [];
if (count($_POST) > 0) {

    if (($_POST['nome'] === '')) {
        $validacao[] = "Por Favor, Preencha o nome do usúario !";
    }
    if ($_POST['email'] === '') {
        $validacao[] = "Por Favor, Preencha o email do usúario !";
    }
    if ($_POST['senha'] === '') {
        $validacao[] = "Por Favor, Preencha a senha do usúario !";
    }
    if ($_POST['senha'] != $_POST['confirmacao']) {
        $validacao[] = "A senha não confere !";
    }
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
    <?php
    if (count($validacao)): ?>
        <ul>
            <?php foreach ($validacao as $validacao): ?>
                <li>
                    <?= $validacao ?>
                </li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite seu Nome">
        </div>
        <div>
            <input type="text" name="email" placeholder="Digite seu Email">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite sua Senha">
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="Confirme sua Senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

</body>

</html>