<?php
if(isset($_POST['compra'])){
    $compra = $_POST['compra'];
    print_r($compra);
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
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="compra[]" value="Tomate">Tomate
        </div>
        <div>
            <input type="checkbox" name="compra[]" value="banana">Banana
        </div>
        <div>
            <input type="checkbox" name="compra[]" value="coquinha">Coquinha
        </div>
        <div>
            <input type="checkbox" name="compra[]" value="carne">Carne
        </div>
        <div>
            <input type="checkbox" name="compra[]" value="cerveja">Cerveja
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
        
    </form>

</body>

</html>