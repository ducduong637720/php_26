<?php 
session_start();
if (isset($_SESSION['login'])) {
	echo '<a href="logout.php">Logout</a>';
}else{
	echo '<a href="login.php">Login</a>';
}

if (isset($_COOKIE['error'])) {
	echo '<p style="color: red">' .$_COOKIE['error'] ."</p>";
}
if (isset($_COOKIE['success'])) {
	echo '<p style="color: green">' .$_COOKIE['success'] ."</p>";
}
if (isset($_SESSION['login'])) {
	echo "<h1>Da login<?h1>";
}else{
	echo "<h1>Chua login<?h1>";
}
?>