<?php
//Herencia
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

class trabajador extends persona { //decimos que el trabajador se crea a partir de las caracteristica de la clase persona {
    public $puesto; // nueva propiedad
    public function presentarseComoTrabajador(){
        echo "Hola soy " . $this->nombre . " y soy un " . $this->puesto;
    }

}

// $objTrabajador = new trabajador(); //instancia: crear un obj a partir de una clase con la palabra reservada new + nombre de la clase
$objTrabajador->asignarNombre("Alejandro Villamayor"); //lamo a un metodo
$objTrabajador->puesto = "Programador";

$objTrabajador->presentarseComoTrabajador();






?>