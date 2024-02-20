<?php
if (isset($_POST['submit'])) {
    require "../common.php";
    try {
        require_once '../src/DBconnect.php';
        $new_user = array(
            "name" => escape($_POST['name']),
            "address" => escape($_POST['address']),
            "email" => escape($_POST['email']),
            "password" => escape($_POST['password']),
            "age" => escape($_POST['age']),
            "dob" => escape($_POST['dob']),
            "passportNo" => escape($_POST['passportNo']),
            "phoneNo" => escape($_POST['phoneNo']),
        );
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "customer",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
        );
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

 include "templates/header.php";
if (isset($_POST['submit']) && $statement){
    echo $new_user['name']. ' successfully added';
}
?>


    <h2>Add a user</h2>
<div id="dataForm">
    <form method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="address">Address</label>
        <input type="text" name="address" id="address">

        <label for="email">Email Address</label>
        <input type="text" name="email" id="email">

        <label for="password">password</label>
        <input type="text" name="password" id="password">

        <label for="age">Age</label>
        <input type="text" name="age" id="age">

        <label for="dob">Date of Birth</label>
        <input type="text" name="dob" id="dob">

        <label for="passportNo">Passport Number</label>
        <input type="text" name="passportNo" id="passportNo">

        <label for="phoneNo">Phone Number</label>
        <input type="text" name="phoneNo" id="phoneNo">

        <input type="submit" name="submit" value="Submit">
    </form>
</div>
    <a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>