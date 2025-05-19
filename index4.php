<?php
/*
Acceder la página con un query param (localhost:8000/index4.php?id=1). Leer el parámetro de GET, importar las habitaciones JSON,
y buscar dentro del array para ver si hay una habitación con el mismo ID. Si hay una, mostrarla con las propiedades Name, Number, Price y Discount
 */
$json = file_get_contents('JSON/Rooms.json');

if ($json === false) {
    die("Error to load json");
}

$rooms = json_decode($json, true);

$id = $_GET['id'];

foreach ($rooms as $room) {
    if($room['room_id']===$id){
        echo "<pre>";
        echo "Name:".$room['room_name']."<br/>"."Number:".$room['number']."<br/>"."Price:".$room['price']."<br/>"."Discount:".$room['discount']."<br/>";
        echo "</pre>";
        break;
    }
}