<?php

//Metodos estaticos, se llaman sin tener instancia (instancia es la creacion de un obj)

class UnaClase{
    public static function UnMetodo(){
        echo"Hola soy un metodo estatico <br/>";
    }
}

$obj= new UnaClase();
$obj->UnMetodo();

UnaClase::UnMetodo(); //accedemos con el doble :: a este metodo estatico, se ve mucho en ORM.
?>