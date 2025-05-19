<?php
/*
Utilizar el mismo código para importar el archivo JSON pero esta vez pon una etiqueta <ol></ol> y mostrar cada habitación como un <li></li> utilizando un bucle de PHP. Mostrar las propiedades Name, Number, Price y Discount
*/
$json = file_get_contents('JSON/Rooms.json');

if ($json === false) {
    die("Error to load json");
}

$rooms = json_decode($json, true);

echo "<ol>";
foreach($rooms as $room) {
    echo "<li>";
    echo "Name:".$room['room_name']."<br/>"."Number:".$room['number']."<br/>"."Price:".$room['price']."<br/>"."Discount:".$room['discount']."<br/>";
    echo "</li>";
}
echo "</ol>";