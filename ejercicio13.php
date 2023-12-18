<?php

if ($_POST) {

    $boton = $_POST['btnValor'];

    switch ($boton) { // adentro de cada case puedo poner mas intrucciones etc

        case 1:
            echo 'Presiono el boton 1';
            break;

        case 2:
            echo 'Presiono el boton 2';
            break;

        case 3:
            echo 'Presiono el boton 3';
            break;
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

    <form action="ejercicio13.php" method="post">

        <input type="submit" value="1" name="btnValor">
        <br />
        <input type="submit" value="2" name="btnValor">
        <br />

        <input type="submit" value="3" name="btnValor">

    </form>

</body>

</html>