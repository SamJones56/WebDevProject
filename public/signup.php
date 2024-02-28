<?php
if (isset($_POST['submit'])) {
    require "../common.php";
    include "../src/Functions/addToTable.php";
    require_once '../src/DBconnect.php';

    // Data for the person table
    $new_person = array(
        "name" => escape($_POST['name']),
        "address" => escape($_POST['address']),
        "ph_no" => escape($_POST['ph_no']),
        "age" => escape($_POST['age']),
        "dob" => escape($_POST['dob'])
    );

    // Get person_id
    $person_id_array = getForeignKey($connection, "person", "person_id");
    // Extract person_id from the array
    $person_id = $person_id_array['MAX(person_id)'];

    // Date for the customer table
    $new_customer = array(
        "person_id" => $person_id,
        "passport_no" => escape($_POST['passport_no'])
    );

//        Data for the login table
    $new_login = array(
        "email" => escape($_POST['email']),
        "password" => escape($_POST['password'])
    );

    // Get customer_id
    $customer_id_array = getForeignKey($connection, "customer", "customer_id");
    // Extract person_id from the array
    $customer_id = $customer_id_array['MAX(customer_id)'];

    // Get login_id
    $login_id_array = getForeignKey($connection, "login", "login_id");
    // Extract person_id from the array
    $login_id = $login_id_array['MAX(login_id)'];


//        Date for the member table
    $new_member = array(
            "customer_id" => $customer_id,
            "login_id" => $login_id
    );

//        $sql = sprintf(
//            "INSERT INTO %s (%s) values (%s)",
//            "person",
//            implode(", ", array_keys($new_user)),
//            ":" . implode(", :", array_keys($new_user))
//        );
//        $statement = $connection->prepare($sql);
//        $statement->execute($new_user);
    addToTable($connection, $new_person, "person");
    addToTable($connection, $new_customer, "customer");
    addToTable($connection, $new_login, "login");
    addToTable($connection, $new_member, "member");


//    } catch(PDOException $error) {
//        echo addToTable() . "<br>" . $error->getMessage();
//    }
}

include "templates/header.php";
if (isset($_POST['submit']) ) {
    echo $new_person['name'] . ' successfully added';
}
?>


    <h2>Add a user</h2>
    <div id="dataForm">
        <form method="post">
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

            <label for="ph_no">Phone Number</label>
            <input type="text" name="ph_no" id="ph_no">

            <label for="passport_no">Passport Number</label>
            <input type="text" name="passport_no" id="passport_no">

            <label for="password">password</label>
            <input type="text" name="password" id="password">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>