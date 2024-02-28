<?php
use Hotel\DiningTable;

function makeNewTable() {

    if (isset($_POST['submit'])) {
        require "../common.php";
        try {
            require_once '../src/DBconnect.php';
            $new_table = array(
                "table_id" => escape($_POST['table_id']),
                "capacity" => escape($_POST['capacity'])
            );
            $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "restaurantTables",
                implode(", ", array_keys($new_table)),
                ":" . implode(", :", array_keys($new_table))
            );
            $statement = $connection->prepare($sql);
            $statement->execute($new_table);
        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }

    if (isset($_POST['submit']) && $statement){
        echo $new_table['table_id']. ' successfully added';
    }


//    Old code below
//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//
//        $capacity = $_POST['capacity'];
//        $table_no = $_POST['table_no'];
//
//        // Create a DiningTable object.
//        $diningTable = new DiningTable($table_no, $capacity);
//
//        // Grab the form Data.
//        $newTableJson[] = [
//            'table_no' => $diningTable->getTable_no(),
//            'capacity' => $diningTable->getCapacity()
//        ];
//
//        // Encode the combined data into JSON.
//        $json = json_encode($newTableJson, JSON_PRETTY_PRINT);
//
//        // Specify the file path for tables.json.
//        $file = '../DBtemp/tables.json';
//
//        // Write JSON data to the file.
//        file_put_contents($file, $json);
//
//        // Output success messages.
//        echo "Table data stored successfully!";

//         
//    }
    
}
?>
