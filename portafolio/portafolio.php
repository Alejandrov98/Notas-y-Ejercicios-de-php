<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

if ($_POST) {

    $nombre = $_POST["nombre"]; // guardamos el nombre que viene por post en esta variable
    $descripcion = $_POST["descripcion"];
    // para evitar que el nombre de las imagenes se pise al crearlas al mismo tiempo usaremos la fecha
    $fecha = new DateTime();
    
    //agregamos fecha para que forme parte del nombre 
    $imagen = $fecha->getTimestamp() . "_" . $_FILES["archivo"]["name"];


    $imagen_temporal = $_FILES['archivo']['tmp_name']; //la imagen real
    move_uploaded_file($imagen_temporal, "imagenes/" . $imagen); // 

    $objConexion = new conexion();
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion')"; // le pongo las comillas s para que no de error
    $objConexion->ejecutar($sql);
    header("location:portafolio.php"); // Nos va a servir para que el usuario no pueda actualizar y se reinserte todo el tiempo y capturar de neuvo la info
}

if ($_GET) {
    // DELETE FROM `proyectos` WHERE `proyectos`.`id` = 9 Esta instruccion la guarde para reemplazar por lo valores correctos
    $id = $_GET['borrar'];
    $objConexion = new conexion();

    //vamos hacer una consulta para borrar la imagen
    $imagen = $objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=" . $id);
    unlink("imagenes/" . $imagen[0]['imagen']); // unblink es una funcion que permite llevar a cabo borrar, se debe pasar la ruta para remover la imagen

    $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` = " . $_GET["borrar"];
    $objConexion->ejecutar($sql);
    header("location:portafolio.php"); // Nos va a servir para que el usuario no pueda actualizar y se reinserte todo el tiempo y capturar de neuvo la info


}

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`"); // SUPER IMPORTANTE ESTAS CONSULTAS NO PUEOD USAR COMILLAS DOBLES Y SIMPLES JUNTAS, USO BASTIKS PARA LA TABLA.

?>
<br />

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Datos del proyecto</div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        <!-- enviar informacion, debemos agregar la propiedad enctype por las imagenes -->

                        Nombre del proyecto: <input required class="form-control" type="text" name="nombre" id="">
                        <br />
                        Imagen del proyecto: <input required class="form-control" type="file" name="archivo" id="">
                        <br />
                        Descripción:
                        <textarea required class="form-control" name="descripcion" id="" rows="3"></textarea>
                        <br />

                        <input class="btn btn-success" type="submit" value="Enviar Proyecto">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($proyectos as $proyecto) { ?>
                            <tr class="">
                                <td scope="row">
                                    <?php echo $proyecto['id']; ?>
                                </td>
                                <td>
                                    <?php echo $proyecto['nombre']; ?>
                                </td>
                                <td>
                                    <img src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="" width="100">
                                    
                                </td>
                                <td>
                                    <?php echo $proyecto['descripcion']; ?>
                                </td>
                                <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php include("pie.php") ?>