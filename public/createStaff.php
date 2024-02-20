<?php
if (isset($_POST['submit'])) {
    require "../common.php";
    try {
        require_once '../src/DBconnect.php';
        $new_staff = array(
            "deptId" => escape($_POST['deptId']),
            "permissionLvl" => escape($_POST['permissionLvl']),
            "name" => escape($_POST['name']),
            "age" => escape($_POST['age']),
            "dob" => escape($_POST['dob']),
            "address" => escape($_POST['address']),
            "email" => escape($_POST['email']),
            "phoneNo" => escape($_POST['phoneNo']),
            "password" => escape($_POST['password'])
        );
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "staff",
            implode(", ", array_keys($new_staff)),
            ":" . implode(", :", array_keys($new_staff))
        );
        $statement = $connection->prepare($sql);
        $statement->execute($new_staff);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

include "templates/header.php";
if (isset($_POST['submit']) && $statement){
    echo $new_staff['name']. ' successfully added';
}
?>

    <h2>Add a new staff member</h2>
    <div id="dataForm">
        <form method="post">
            <label for="deptId">Department id</label>
            <input type="text" name="deptId" id="deptId">

            <label for="permissionLvl">Permission Level</label>
            <input type="text" name="permissionLvl" id="permissionLvl">

            <label for="name">Name</label>
            <input type="text" name="name" id="name">

            <label for="age">Age</label>
            <input type="text" name="age" id="age">

            <label for="dob">Date of Birth</label>
            <input type="text" name="dob" id="dob">

            <label for="address">Address</label>
            <input type="text" name="address" id="address">

            <label for="email">Email Address</label>
            <input type="text" name="email" id="email">

            <label for="phoneNo">Phone Number</label>
            <input type="text" name="phoneNo" id="phoneNo">

            <label for="password">password</label>
            <input type="text" name="password" id="password">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>