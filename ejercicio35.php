<?php

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

$opciones = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false)); // Aquí se configuran opciones para la función file_get_contents. En particular, se desactiva la verificación del certificado SSL (verify_peer y verify_peer_name). Esto puede ser útil en entornos de desarrollo o en casos donde la verificación SSL no sea esencial.

$respuesta = file_get_contents($url, false, stream_context_create($opciones));  // La función file_get_contents se utiliza para realizar una solicitud HTTP a la URL proporcionada. En este caso, se utiliza un contexto de transmisión (stream_context_create) para aplicar las opciones de configuración definidas anteriormente. La función stream_context_create se utiliza para crear un contexto de transmisión personalizado. Un contexto de transmisión permite configurar opciones de transmisión, como la verificación SSL, encabezados HTTP, entre otros.

$objRespuesta = json_decode($respuesta); // json_decode transforma la informacion, se utiliza para decodificar una cadena de texto en formato JSON y convertirla en una variable o objeto de PHP. JSON.

// print_r($objRespuesta);

foreach ($objRespuesta->list as $video) { //accedemos a list que tiene toda la informacion

    // print_r("<br/>" . $video->title . "<br/>");
    // print_r($video->channel . "<br/>");
}

?>
<ul>
    <?php foreach ($objRespuesta->list as $video) { ?>
        <li>
            <?php echo ($video->title); ?> |
            <?php echo ($video->channel); ?>
        </li>
    <?php } ?>

</ul>