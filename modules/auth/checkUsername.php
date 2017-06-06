<!-- Checks the username proposed by a new user to against existing entries to prevent duplicate entries -->
<!-- Last updated by Ryan Hayes on 6/5/2017 -->


<?php
	// Establish the connection to the authentication database
	require('db-connect.php');
	// Get the username from the URL for checking
	$username = $_GET['uname'];
	// Generate an id number for the new user
	$query = "SELECT * FROM auth WHERE username LIKE '" . $username . "'";
	mysqli_query($db, $query) or die('Error querying database.');
	$result = mysqli_query($db, $query);
	while ($row = mysqli_fetch_array($result)) {
		echo "<span id='userExists'><i class='fa fa-times' style='color: red;'></i><span style='color: red;'>&nbsp;Username already taken!</span></span>";
		break;
	}
?>
