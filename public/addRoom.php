
<?php

include "templates/header.php";

// Include the Room class file.
include '../src/Hotel/Room.php';

// Include functions file
include "../src/Functions/roomFunctions.php";

makeNewRoom();
?>

<title>Add Objects</title>

<h2>Add a Room</h2>

<div id="dataForm">
    <form method="post">
        <label for="room_no">Room No</label>
       <input type="text" name="room_no" id="room_no"><br>
       
       <label for="size">Size</label> 
       <select
		name="size" id="size">
		<option value="single">Single</option>
		<option value="double">Double</option>
		<option value="twin">Twin</option>
		<option value="suite">Suite</option>
		</select><br>
        
        
        <label for="accessibility">Accessibility</label> 
       <select
		name="accessibility" id="accessibility">
		<option value="wheelchair">Wheelchair Accessible</option>
		<option value="non_accessible">Non Accessible</option>
		</select><br>

        <label for="price">Price</label>
        <input type="text" name="price" id="price"><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</div>


<!-- FOOTER -->
<?php include "templates/footer.php";?>
