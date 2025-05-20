<?php
//Utilizar el mismo código de index8.php pero esta vez guardar la habitación nueva en la base de datos de MySQL. Se puede confirmar visitando index5.php
$mysqli = new mysqli("127.0.0.1","devuser","1234","hotel");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$inserted_room = null;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $room_number = $_POST['room_number'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];

    $sql = "INSERT INTO room (room_name, room_number, price, discount) VALUES ('$name', '$room_number', '$price', '$discount')";
    $mysqli->query($sql);

    $last_id = $mysqli->insert_id;
    $result = $mysqli->query("SELECT * FROM room WHERE id = $last_id");
    $inserted_room = $result->fetch_assoc();
}

$sql = "SELECT * FROM room WHERE room_name LIKE '%$name%'";


if($inserted_room){
    echo "<pre>";
    echo "ID: " . $inserted_room['room_id'] . "<br/>";
    echo "Name: " . $inserted_room['room_name'] . "<br/>";
    echo "Number: " . $inserted_room['room_number'] . "<br/>";
    echo "Price: " . $inserted_room['price'] . "<br/>";
    echo "Discount: " . $inserted_room['discount'] . "<br/>";
    echo "</pre>";
}

echo '<form method="POST">
        <label>New Room</label>
        <input type="text" name="name" placeholder="Name"></input>
        <input type="number" name="room_number" placeholder="Number"></input>
        <input type="number" name="price" placeholder="Price"></input>
        <input type="number" name="discount" placeholder="Discount"></input>
        <input type="submit"></input>
    </form>';