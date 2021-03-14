<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "mrdenizlp" && $password == "123456") {
	header("Location: ../admin/admin.php");
} else {
	header("Location: ../index.php");
}

?>