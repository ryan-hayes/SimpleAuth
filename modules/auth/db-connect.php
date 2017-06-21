<!-- Connection string for the authentication database -->
<!-- Last updated by Ryan Hayes on 6/5/2017 -->

<?php
	$db = mysqli_connect('localhost','root','','auth')
	or die('Error connecting to MySQL server.');
?>
