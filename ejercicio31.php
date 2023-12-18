<?php

$txtNombre = "";
$rdgLenguaje = "";
$checkphp = "";
$checkhtml = "";
$checkcss = "";
$lsAnime = "";
$txtComentario = "";


if ($_POST) {
    $txtNombre = (isset($_POST["txtNombre"])) ? $_POST["txtNombre"] : ""; // ternario igual que js, si hay algo, vas asignarlo tal cual sino ":" continua vacio.
    $rdgLenguaje = (isset($_POST["lenguaje"])) ? $_POST["lenguaje"] : "";
    $checkphp = (isset($_POST["checkphp"]) == "si") ? "checked" : "";
    $checkhtml = (isset($_POST["checkhtml"]) == "si") ? "checked" : "";
    $checkcss = (isset($_POST["checkcss"]) == "si") ? "checked" : "";
    $lsAnime = (isset($_POST["lsAnime"])) ? $_POST['lsAnime'] : "";
    $txtComentario = (isset($_POST["txtComentario"])) ? $_POST["txtComentario"] : "";
    //Intruccion de insertar
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php if ($_POST) {  // Esto se dice como codigo enbebido; Esta es una forma de hacer un condicional dentro dle html asi se abre de esta forma?>
        <strong> Hola </strong>:
        <?php echo $txtNombre; ?>
        <br />
        <strong>Tu lenguaje es:
            <?php echo $rdgLenguaje; ?>
        </strong>
        <br>
        <strong>Estas aprendiendo:
            <br>
            <?php echo ($checkphp == "checked") ? "PHP" : ""; ?><br>
            <?php echo ($checkhtml == "checked") ? "HTML" : ""; ?><br>
            <?php echo ($checkcss == "checked") ? "CSS" : ""; ?><br>
        </strong>
        <br>
        <strong>Tu anime favoritos es:
            <?php echo $lsAnime; ?>
        </strong>
        <br>
        <strong> Tu mensaje es:
            <?php echo $txtComentario ?>
        </strong>

    <?php } //asi se cierra ?>
    <form action="ejercicio31.php" method="post">

        Nombre: <br />
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <?php // En esta linea usamos value para conservar el valor de la variable sin que se borre al enviar?>
        <br>
        ¿Te gusta?: <br />
        <br /> php: <input type="radio" name="lenguaje" id="" value="php" <?php echo ($rdgLenguaje == "php") ? "checked" : "" ?>>
        <br /> html: <input type="radio" name="lenguaje" id="" value="html" <?php echo ($rdgLenguaje == "html") ? "checked" : "" ?>>
        <br /> css: <input type="radio" name="lenguaje" id="" value="css" <?php echo ($rdgLenguaje == "css") ? "checked" : "" ?>>
        <br>
        <br>

        Estas Aprendiendo...
        <br>
        <br /> php:<input type="checkbox" <?php echo $checkphp; ?> name="checkphp" id="" value="si">
        <br /> html:<input type="checkbox" <?php echo $checkhtml; ?> name="checkhtml" id="" value="si">
        <br /> css:<input type="checkbox" <?php echo $checkcss; ?> name="checkcss" id="" value="si">
        <br>

        ¿Qué Anime te gusta? ... <br />
        <select name="lsAnime" id="">

            <option value="">[Ninguno]</option>
            <option value="naruto" <?php echo ($lsAnime == "naruto") ? "selected" : ""; ?>> Naruto </option>
            <option value="bleach" <?php echo ($lsAnime == "bleach") ? "selected" : ""; ?>>Bleach</option>
            <option value="dbz" <?php echo ($lsAnime == "dbz") ? "selected" : ""; ?>>Dragon Ball Z</option>
        </select>
        <br>

        ¿Tienes alguna Duda? <br />

        <textarea name="txtComentario" id="" cols="30" rows="10"></textarea>
        <br>

        <br />
        <input type="submit" value="Enviar Informacion">
    </form>
</body>

</html>