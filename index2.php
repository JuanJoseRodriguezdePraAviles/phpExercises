<?php
//Copiar el archivo JSON de las habitaciones ficticios al proyecto (rooms.json), importar el archivo en index2.php y muestra el contenido dentro de una etiqueta <pre></pre>

$rooms = loadRoomsFromJson();

echo "<pre>";
foreach($rooms as $room) {
    print_r($room);
}
echo "</pre>";

function loadRoomsFromJson() {
    $json = file_get_contents('JSON/Rooms.json');
    if ($json === false) {
        die("Error al cargar el JSON");
    }
    return json_decode($json, true);
}