<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "mrdenizlp" && $password == "123456") {
	header("Location: ../admin/admin.php");
} else {
	header("Location: ../index.php");
}

$determinator = $_POST["determinator"];

	if($determinator == "update") {
		$_SESSION["determinator"] = "update";
	} else if($determinator == "create") {
		$_SESSION["determinator"] = "create";
	} else if ($determinator == "delete") {
		$_SESSION["determinator"] = "delete";
	} else {
		$_SESSION["determinator"] = "dashboard";
	}

?>