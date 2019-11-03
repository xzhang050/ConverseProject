<?php
    $servername = "localhost";
	$username = "f31ee";
	$password = "f31ee";
	$dbname = "f31ee";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
				}
?>