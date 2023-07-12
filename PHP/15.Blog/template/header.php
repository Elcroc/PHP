<?php
include_once("helper/url.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" ?<?= $BASE_URL ?>href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog JJ">
        </a>
        <nav>
            <ul id = "navbar">
                <li><a href="<?= $BASE_URL ?> "class ="nav-link">Home</a></li>
                <li><a href="#" class ="nav-link">Categorias</a></li>
                <li><a href="#" class ="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>contato.php" class ="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>