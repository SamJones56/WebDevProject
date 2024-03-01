<?php
use Hotel\Room;

function makeNewRoom()
{
    if (isset($_POST['submit'])) {
        require "../common.php";
        try {
            require_once '../src/DBconnect.php';
            $new_table = array(
                "room_id" => escape($_POST['room_id']),
                "room_type" => escape($_POST['room_type']),
                "accessibility" => escape($_POST['accessibility']),
                "price" => escape($_POST['price'])
            );
            $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "rooms",
                implode(", ", array_keys($new_table)),
                ":" . implode(", :", array_keys($new_table))
            );
            $statement = $connection->prepare($sql);
            $statement->execute($new_table);
            $room = new Room($_POST['room_id'], $_POST['room_type'], $_POST['accessibility'], $price);

        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }

    if (isset($_POST['submit']) && $statement){
        echo $new_table['room_id']. ' successfully added';
    }

//    Old code below
//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//
//        // Retrieve table data from the form.
//        $room_no = $_POST["room_no"];
//        $size = $_POST['size'];
//        $accessibility = $_POST['accessibility'];
//        $price = $_POST["price"];
//
//        $room = new Room($room_no, $size, $accessibility, $price);
//
//        // Grab the form Data.
//        $roomData[] = [
//            'room_no' => $room->getRoom_no(),
//            'type' => $room->getType(),
//            'accessibility' => $room->getAccessibility(),
//            'price' => $room->getPrice()
//        ];
//
//        $json = json_encode($roomData, JSON_PRETTY_PRINT);
//        // create file.
//        $file = '../DBtemp/rooms.json';
//        // Write JSON data to the file.
//        file_put_contents($file, $json);
//        // Output success messages.
//        echo "Room data stored successfully!";
//    }
}