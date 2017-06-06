<!-- Prints out all the users in the DB - for testing purposes, will be deprecated -->
<!-- Last updated by Ryan Hayes on 6/5/2017 -->


<?php
	// Establish the connection to the authentication database
	require('db-connect.php');
	// Query the authentication database
	$query = "SELECT * FROM auth";
	$result = mysqli_query($db, $query);
	// Print out the results
	while ($row = mysqli_fetch_array($result)) {
 		echo $row['id'] . ' ' . $row['username'] . ': ' . $row['password'] .'<br />';
	}
?>
