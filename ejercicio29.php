<?php

$servidor = "localhost";
$usuario = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = " SELECT * FROM `fotos`"; // Selecciona todo de la tabla fotos

    $sentencia = $conexion->prepare($sql); //Esta función se utiliza para preparar una sentencia SQL para su ejecución. Preparar una sentencia es beneficioso por varias razones, incluido el rendimiento y la seguridad. Al utilizar una sentencia preparada, el motor de base de datos puede compilar y optimizar la consulta una vez y luego ejecutarla varias veces con diferentes conjuntos de parámetros, lo que puede mejorar el rendimiento. En esta línea, la variable $sentencia ahora contiene un objeto preparado para la consulta SQL especificada en la variable $sql. Después de preparar la sentencia, se pueden vincular parámetros (si es necesario) y ejecutar la consulta.
    $sentencia->execute(); //

    $resultado = $sentencia->fetchAll(); // fetchAll: Después de ejecutar la consulta preparada, se utiliza la función fetchAll para obtener todas las filas del conjunto de resultados como un array asociativo. Cada fila del conjunto de resultados se almacena como un elemento en el array resultante. La variable $resultado ahora contiene un array con todas las filas recuperadas de la tabla fotos. Puedes imprimir o manipular este array según sea necesario.

    // print_r($resultado);

    foreach ($resultado as $foto) {
        print_r($foto['nombre'] . " con el id " . $foto["id"] . "<br/>");
    }


    echo "Conexion establecida";


} catch (PDOException $error) { //Permite mostrar el error.
    echo "Conexion erronea " . $error;
}

?>