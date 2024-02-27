<?php
// Include header template.
include "templates/header.php";
// Include functions file
include "../src/Functions/adminFunctions.php";

adminPageRedirect();

?>

<title>Admin Page</title>

<h2>Add a Service/ Facility</h2>

<form method="post">
	<label for="services">Choose a Facility to add:</label> <select
		name="services" id="services">
		<option value="room">New Room</option>
		<option value="table">Restaurant Table</option>
<!-- 		<option value="treatment">Treatment</option> -->
	</select> <input type="submit" name="submit" value="OK">
</form>
</div>


<?php

include "templates/footer.php";
?>