<?php 
session_start();
if (isset($_SESSION['name'])) {
	$name = $_SESSION['name'];
	echo $name;
}else {
	echo "Khong co";
}
// $name = $_SESSION["name"];
// echo $name;


?>