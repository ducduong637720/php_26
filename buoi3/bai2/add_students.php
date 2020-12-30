<?php 
session_start();
$user = [];
if ($_POST['id']) $user['id'] = $_POST['name'];
if ($_POST['name']) $user['name'] = $_POST['name'];
if ($_POST['sdt']) $user['sdt'] = $_POST['sdt'];
if ($_POST['email']) $user['email'] = $_POST['email'];
if ($_POST['adress']) $user['adress'] = $_POST['adress'];

$_SESSION['users'][] = [
	'id' => $id,
	'name' => $name,
	'sdt' => $sdt,
	'email' => $email,
	'adress' => $adress,
];

header('Location: index.php');
?>