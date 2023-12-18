<?php

$frutas = array("b" => "banana", "m" => "manzana", "p" => "pera", "f" => "frutilla", "ma" => "mandarina", "k" => "kiwi");



// for ($indice = 0; $indice < 6; $indice++) {
//     echo $frutas[$indice] . "<br/>";
// }

foreach ($frutas as $key => $value) {
    echo "Tengo el indice ".$key. " para la fruta ". $value . "<br/>"; 

}
?>