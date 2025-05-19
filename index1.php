<?php
/*
Crear un array en PHP conteniendo 3 habitaciones (cada una es un array asociativo). Cada habitación tiene 5 propiedades: ID, Name, Number, Price, Discount. Muestra el array entero dentro de una etiqueta <pre></pre>
*/

class Room {
    private $ID;
    private $Name;
    private $Number;
    private $Price;
    private $Discount;

    function __construct($ID, $Name, $Number, $Price, $Discount) {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Number = $Number;
        $this->Price = $Price;
        $this->Discount = $Discount;
    }

    function get_ID() {
        return $this->ID;
    }
    function set_ID($ID) {
        $this->ID = $ID;
    }

    function get_Name() {
        return $this->Name;
    }
    function set_Name($Name) {
        $this->Name = $Name;
    }

    function get_Number() {
        return $this->Number;
    }
    function set_Number($Number) {
        $this->Number = $Number;
    }

    function get_Price() {
        return $this->Price;
    }
    function set_Price($Price) {
        $this->Price = $Price;
    }

    function get_Discount() {
        return $this->Discount;
    }
    function set_Discount($Discount) {
        $this->Discount = $Discount;
    }
}

$rooms = array(new Room(1, "Suite", "001", 345, 0), new Room(2, "Suite", "002", 345, 0), new Room(3, "Suite", "003", 345, 0));

echo "<pre>";
foreach ($rooms as $room) {
    print_r($room);
}
echo "</pre>";