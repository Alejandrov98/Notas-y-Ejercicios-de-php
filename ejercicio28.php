<?php

$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password); //  se está utilizando PDO (PHP Data Objects) para establecer una conexión a una base de datos MySQL.
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // setAttribute: Es un método de la clase PDO que se utiliza para establecer atributos de configuración para la conexión a la base de datos.

    //PDO::ATTR_ERRMODE: Es una constante que representa el atributo que estamos configurando. En este caso, se refiere al modo en que PDO maneja los errores.

    //PDO::ERRMODE_EXCEPTION: Es otra constante que especifica cómo PDO debería manejar los errores. En este caso, se está configurando para lanzar excepciones cuando ocurre un error. Esto significa que si hay algún problema durante la ejecución de una consulta SQL, PDO lanzará una excepción que puedes capturar y manejar en tu código.

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la programacion', 'foto.jpg');"; //instruccion para insertar en la base de datos

    $conexion->exec($sql); // se utiliza para ejecutar una consulta SQL en la base de datos. En particular, se está utilizando para ejecutar una instrucción INSERT que agrega un nuevo registro a la tabla fotos en la base de datos.

    echo "Conexion establecida";


} catch (PDOException $error) { //Permite mostrar el error.
    echo "Conexion erronea " . $error;
}

?>