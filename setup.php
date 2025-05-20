<?php
//Bonus: Extraer todo el ‘setup’ a un archivo setup.php para dejar el archivo index10.php limpio
require __DIR__ . '/vendor/autoload.php';

include 'BladeOne.php';
use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);

$json = file_get_contents('JSON/Rooms.json');
if ($json === false) {
    die("Error al cargar el JSON");
}
$rooms = loadRoomsFromJson();

function loadRoomsFromJson() {
    $json = file_get_contents('JSON/Rooms.json');
    if ($json === false) {
        die("Error al cargar el JSON");
    }
    return json_decode($json, true);
}