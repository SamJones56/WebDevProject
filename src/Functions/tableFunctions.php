<?php
use Hotel\DiningTable;

function makeNewTable() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $capacity = $_POST['capacity'];
        $table_no = $_POST['table_no'];

        // Create a DiningTable object.
        $diningTable = new DiningTable($table_no, $capacity);

        // Grab the form Data.
        $newTableJson[] = [
            'table_no' => $diningTable->getTable_no(),
            'capacity' => $diningTable->getCapacity()
        ];

        // Encode the combined data into JSON.
        $json = json_encode($newTableJson, JSON_PRETTY_PRINT);

        // Specify the file path for tables.json.
        $file = '../DBtemp/tables.json';

        // Write JSON data to the file.
        file_put_contents($file, $json);

        // Output success messages.
        echo "Table data stored successfully!";

//         
    } 
    
}
?>
