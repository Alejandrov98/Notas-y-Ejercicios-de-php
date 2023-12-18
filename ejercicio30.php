<?php
// sirve para autenticacion, carritos de compras etc
session_start(); //sirve para mantener informacion mientras el navegador este abierto en todas las paginas

$_SESSION["Usuario"] = "develoteca";
$_SESSION["Estatus"] = "logueado";

echo "Sesion Iniciada" . "<br/>";

echo "Usuario: " . $_SESSION["Usuario"] . " estatus: " . $_SESSION["Estatus"];

//La diferencia de usar _Session a declarar una varialbe es que el dato se puede leer en archivos distintos sin enviarlos se peude obtener la informacion ej:ejercicio30_1.php. 



?>