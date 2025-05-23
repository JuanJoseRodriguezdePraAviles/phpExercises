<?php
/*
Acceder la página con un query param (localhost:8000/index4.php?id=1). Conectar a la base de datos de MySQL utilizando mysqli. Hacer una consulta para obtener una habitación (con el ID de GET) y mostrarla abajo utilizando el código de index4.php
*/
$id = $_GET['id'];

$mysqli = connectToDB();

$result = fetchRoomFromDB($id);

if($result) {
    $room = $result->fetch_assoc();

    if($room['id']===$id){
        echo "<pre>";
        echo "Name:".$room['room_name']."<br/>"."Number:".$room['number']."<br/>"."Price:".$room['price']."<br/>"."Discount:".$room['discount']."<br/>";
        echo "</pre>";
    }
}

function fetchRoomFromDB($id) {
    $result = $mysqli->query("SELECT * FROM room WHERE id = $id");
    return $result->fetch_assoc();
}

function connectToDB() {
    $mysqli = new mysqli("192.168.1.130","devuser","1234","hotel");
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    return $mysqli;
}
    