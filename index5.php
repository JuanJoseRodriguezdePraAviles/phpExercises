<?php
/*
Conectar a la base de datos de MySQL utilizando mysqli. Hacer una consulta para obtener las habitaciones y mostrarlas abajo utilizando el código de index3.php
*/

$mysqli = new mysqli("127.0.0.1","devuser","1234","hotel");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$sql = "SELECT * FROM room";
$rooms = $mysqli -> query($sql);
$row = $rooms -> fetch_assoc();
printf ($row['id']);

echo "<ol>";
foreach($rooms as $room) {
    echo "<li>";
    echo "Name:".$room['room_name']."<br/>"."Number:".$room['number']."<br/>"."Price:".$room['price']."<br/>"."Discount:".$room['discount']."<br/>";
    echo "</li>";
}
echo "</ol>";

