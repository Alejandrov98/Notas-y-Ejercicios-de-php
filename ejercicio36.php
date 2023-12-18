<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web</title>
</head>

<body>
    <?php // include 'ejercicio36_1.php'; ?> <!-- Incluye el contenido de ese archivo -->
    <?php // include 'ejercicio36_1.php'; ?> <!-- Incluye el contenido de ese archivo, sigue funcionando, con requiere no -->
    <?php include_once 'ejercicio36_1.php'; ?>  <!-- Detecta que si esta 2 veces solo se vea una vez, lo mismo pasa con require_once -->
    <?php include_once 'ejercicio36_1.php'; ?>

    <?php echo "Hola estoy en la pagina Principal"; ?> <!-- el include hace: que si no existe muestra un warning puer muestra las siguientes intrucciones -->
</body>

</html>