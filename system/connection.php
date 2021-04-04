<?php

$servername = "localhost";
$database = "showvisitorwebsite";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn) {
		die("Failed" . mysqli_connect_error());
	}

?>
