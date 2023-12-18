<?php
session_start();

if (isset($_SESSION["Usuario"])) { // isset funciona para saber si hay algo

    echo "Usuario: " . $_SESSION["Usuario"] . " estatus: " . $_SESSION["Estatus"];
} else {
    echo "No hay datos";
}

?>