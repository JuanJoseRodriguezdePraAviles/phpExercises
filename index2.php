<?php
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