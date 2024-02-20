<?php
// Creation of rooms
if (isset($_POST['submit'])) {
    require "../common.php";
    try {
        require_once '../src/DBconnect.php';
        $new_table = array(
            "capacity" => escape($_POST['capacity']),
        );
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "tables",
            implode(", ", array_keys($new_table)),
            ":" . implode(", :", array_keys($new_table))
        );
        $statement = $connection->prepare($sql);
        $statement->execute($new_table);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

include "templates/header.php";
if (isset($_POST['submit']) && $statement){
    echo $new_table['capacity']. ' successfully added';
}
?>

    <h2>Add a table</h2>
    <div id="dataForm">
        <form method="post">
            <label for="capacity">Capacity</label>
            <input type="text" name="capacity" id="capacity">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>