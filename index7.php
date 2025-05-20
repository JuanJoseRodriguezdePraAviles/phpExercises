<?php
/*
Utilizar el código de index5.php para mostrar todas las habitaciones, pero incluir un formulario (sin method y sin action) para buscar también.
Utilizar un if para ver si has buscado y hacer una consulta diferente para obtener las habitaciones WHERE name LIKE <search>
*/

connectToDB();
if($_GET['name']){
    $name = $mysqli->real_escape_string($_GET['name']);
    $sql = "SELECT * FROM room WHERE room_name LIKE '%$name%'";
} else {
    $sql = "SELECT * FROM room";
}

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

echo '<form action="index7.php" method="GET">
        <label>Search</label>
        <input type="text" name="name" placeholder="Name"></input>
        <input type="submit"></input>
    </form>';

function connectToDB() {
    $mysqli = new mysqli("127.0.0.1","devuser","1234","hotel");
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }
}