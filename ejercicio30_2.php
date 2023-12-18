<?php 
session_start();
session_destroy();
//vaciar una variable de sesion, ej: vaciar un carrito de compras

// echo "Usuario: " . $_SESSION["Usuario"] . " estatus: " . $_SESSION["Estatus"];
echo"Se destruyo la sesion de usuario";

?>