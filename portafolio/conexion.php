<?php
class conexion
{

    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "";
    private $conexion;

    public function __construct()
    {
        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=album", $this->usuario, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Falla de conexión: " . $e->getMessage();
        }
        //generaremos el metodo para insertar

    }

    public function ejecutar($sql)
    { //Insetar/delete/actualizar
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId(); //Es una instruccion que ejecuta una intruccion sql y nos regresar el id insertado
    }
    public function consultar($sql)
    {
        $sentencia = $this->conexion->prepare($sql); // guardamos en la variable sentencia la informacion de sql;
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
}

?>