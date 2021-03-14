<?php
session_start();

$determinator = $_GET["determinator"];

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