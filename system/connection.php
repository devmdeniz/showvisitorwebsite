<?php

$servername = "remotemysql.com";
$database = "PA6nei172B";
$username = "PA6nei172B";
$password = "LLgGXH76EU";

$conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn) {
		die("Failed" . mysqli_connect_error());
	}

?>
