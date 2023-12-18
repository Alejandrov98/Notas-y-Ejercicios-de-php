<?php

if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    //suma
    $suma = $valorA + $valorB;
    $res = $valorA - $valorB;
    $mult = $valorA * $valorB;
    $div = $valorA / $valorB;


    echo "<br/>" . $suma;
    echo "<br/>" . $res;
    echo "<br/>" . $mult;
    echo "<br/>" . $div;

    if ($valorA == $valorB) {
        echo " El valor de A es igual que el valor de B <br/>";

        if ($valorA == 4) {
            echo " El valor es 4 <br/>";

        }
        if ($valorA == 5) {
            echo "El valor es 5 <br/>";
        }
    }

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>

<body>

    <form action="ejercicio11.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br />
        Valor B:
        <input type="text" name="valorB" id="">
        <br />
        <input type="submit" value="Calcular">


    </form>

</body>

</html>