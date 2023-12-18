<?php

//Vamos a crear un archivo

$nombreDelArchivo = "archivo.txt";
$contenidoDelArchivo = " Hola, Saludos";

$archivoACrear = fopen($nombreDelArchivo,"w"); //w modo escritura
fwrite($archivoACrear, $contenidoDelArchivo); //especifico el nombre del archivo que se esta creando y el contenido del archivo
fclose($archivoACrear); //lo cerramos

?>