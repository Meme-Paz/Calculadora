<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="caja" action="calculadora.php" method="get">
        <h1>CALCULADORA PHP</h1>
        <input type="number" name="numero1" value="" placeholder="Ingrese un número">
        <input type="number" name="numero2" value="" placeholder="Ingrese otro número">

        <input type="submit" name="" value="RESPUESTA">
        <output type = "number" name = "">
    </form>
</body>
</html>
<?php
if (isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    if ($numero1 === '' || $numero2 === '') {
        echo 'Por favor, ingrese números en ambos campos.';
    } else {
        echo $numero1 + $numero2;
    }
}

?>