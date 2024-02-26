<?php
use Hotel\Room;

function makeNewRoom()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Retrieve table data from the form.
        $room_no = $_POST["room_no"];
        $size = $_POST['size'];
        $accessibility = $_POST['accessibility'];
        $price = $_POST["price"];

        $room = new Room($room_no, $size, $accessibility, $price);

        // Grab the form Data.
        $roomData[] = [
            'room_no' => $room->getRoom_no(),
            'type' => $room->getType(),
            'accessibility' => $room->getAccessibility(),
            'price' => $room->getPrice()
        ];

        $json = json_encode($roomData, JSON_PRETTY_PRINT);
        // create file.
        $file = '../DBtemp/rooms.json';
        // Write JSON data to the file.
        file_put_contents($file, $json);
        // Output success messages.
        echo "Room data stored successfully!";
    }
}