<?php
//Copiar el archivo JSON de las habitaciones ficticios al proyecto (rooms.json), importar el archivo en index2.php y muestra el contenido dentro de una etiqueta <pre></pre>
$json = file_get_contents('JSON/Rooms.json');

if ($json === false) {
    die("Error to load json");
}

$rooms = json_decode($json, true);

echo "<pre>";
foreach($rooms as $room) {
    print_r($room);
}
echo "</pre>";