<?php

class persona
{
    public $nombre; //propiedades
    private $edad; //restricciones por privacidad (Solo puede ser utilizada por lo metodos)
    protected $altura;
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

// $objAlumno = new persona(); //instancia: crear un obj a partir de una clase con la palabra reservada new + nombre de la clase
$objAlumno->asignarNombre("Alejandro");

// $objAlumno2 = new persona();
$objAlumno2->asignarNombre("Luis");
$objAlumno2->imprimirNombre();

// echo $objAlumno->nombre . "<br/>"; //mostramos una propiedad
echo $objAlumno2->nombre; //mostramos una propiedad
echo $objAlumno2->edad; //mostramos una propiedad
echo $objAlumno2->altura; //mostramos una propiedad



?>