<?php
// Creation of rooms
if (isset($_POST['submit'])) {
    require "../common.php";
    try {
        require_once '../src/DBconnect.php';
        $new_table = array(
            "deptName" => escape($_POST['deptName']),
        );
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "departments",
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
    echo $new_table['deptName']. ' successfully added';
}
?>

    <h2>Add a table</h2>
    <div id="dataForm">
        <form method="post">
            <label for="deptName">Department Name</label>
            <input type="text" name="deptName" id="deptName">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>