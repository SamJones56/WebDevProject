<?php
// Creation of rooms
if (isset($_POST['submit'])) {
    require "../common.php";
    try {
        require_once '../src/DBconnect.php';
        $new_room = array(
            "roomType" => escape($_POST['roomType']),
            "accessibility" => escape($_POST['accessibility']),
            "price" => escape($_POST['price'])
        );
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "rooms",
            implode(", ", array_keys($new_room)),
            ":" . implode(", :", array_keys($new_room))
        );
        $statement = $connection->prepare($sql);
        $statement->execute($new_room);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

include "templates/header.php";
if (isset($_POST['submit']) && $statement){
    echo $new_room['roomType']. ' successfully added';
}
?>

<h2>Add a room</h2>
<div id="dataForm">
    <form method="post">
        <label for="roomType">Room Type</label>
        <input type="text" name="roomType" id="roomType">

        <label for="accessibility">Accessibility</label>
        <input type="text" name="accessibility" id="accessibility">

        <label for="price">Price </label>
        <input type="text" name="price" id="price">

        <input type="submit" name="submit" value="Submit">
    </form>
</div>
<a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>
