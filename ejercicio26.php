<?php

class persona
{
    public $nombre; //propiedades
    private $edad; //restricciones por privacidad (Solo puede ser utilizada por lo metodos)
    protected $altura;

    function __construct($nuevoNombre){ //empieza a iniciarlizarse, los metodos se llaman cuando uno los llama
        $this->nombre = $nuevoNombre;
    }
    public function asignarNombre($nuevoNombre)
    { //acciones o metodos...
        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre()
    {
        echo "Hola soy " . $this->nombre;
    }
    public function mostrarEdad() {
        $this->edad=20;
        return $this->edad;
    }

}

$objAlumno = new persona("Alejandro Villamayor"); //instancia: crear un obj a partir de una clase con la palabra reservada new + nombre de la clase
// $objAlumno->asignarNombre("Alejandro");
$objAlumno->imprimirNombre();



?>