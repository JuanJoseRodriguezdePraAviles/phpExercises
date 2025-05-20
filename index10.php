<?php
include 'setup.php';
//Utilizar el mismo código de index5.php pero en vez de mostrar las habitaciones abajo, utilizar una biblioteca ‘BladeOne’

echo $blade->run("rooms", ["rooms" => $rooms]);