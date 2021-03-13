<?php

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "mrdenizlp" && $password == "123456") {
	$_SESSION["loginsuccessful"] = "successful";
	header("Location: ../admin/login.php");
} else {
	header("Location: ../index.php");
}


?>