<!-- Adds a new user to the authentication database -->
<!-- Last updated by Ryan Hayes on 6/5/2017 -->


<?php
	// Establish the connection to the authentication database
	require('db-connect.php');
	// Get the username and provided passwords
	$username = $_POST['username'];
	$passOrig = $_POST['password-1'];
	// Generate an id number for the new user
	$query = "SELECT MAX(id) FROM auth";
	mysqli_query($db, $query) or die('Error querying database.');
	$result = mysqli_query($db, $query);
	while ($row = mysqli_fetch_array($result)) {
		$userId = $row['MAX(id)'];
	}
	$userId = $userId + 1;
	// Add the new user to the authentication database
	$query = "INSERT INTO auth (id, username, password)
		VALUES ('" . $userId . "', '" . $username . "', '" . $passOrig . "')";
	mysqli_query($db, $query) or die('Error querying database.');
?>
