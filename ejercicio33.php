<?php

$jsonContenido = '[ 
    {"nombre":"Alejandro", "apellido":"Villamayor"},
    {"nombre":"Lucas", "apellido":"Acuña"}
 ]'; // Con "" no sirvio pero con ' si, dato a tener en cuenta

$resultado = json_decode($jsonContenido); //json_decode transforma la informacion, se utiliza para decodificar una cadena de texto en formato JSON y convertirla en una variable o objeto de PHP. JSON (JavaScript Object Notation) es un formato de intercambio de datos ligero que es fácil de leer y escribir para los humanos, y fácil de analizar y generar para las máquinas. Toma como primer parámetro una cadena de texto en formato JSON y devuelve una variable u objeto de PHP que representa los datos contenidos en la cadena JSON. También puede tomar un segundo parámetro opcional, que especifica si se debe devolver los datos como un array asociativo (true) o como un objeto (false, que es el valor predeterminado).
//  print_r($resultado);

foreach ($resultado as $persona) { // leemos el resultado, lo convertimos en persona, leemos y recorremos con la conversion de json_decode
    echo ($persona->nombre) . " " .($persona->apellido). "<br/>";
}
?>