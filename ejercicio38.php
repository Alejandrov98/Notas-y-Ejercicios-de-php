<?php

$archivo="contenido.txt";

$archivoAbierto=fopen($archivo,"r"); // viene de file open, r es la opcion de lectura

$contenido=fread($archivoAbierto, filesize($archivo)); // lee todo el contenido

echo $contenido;



?>