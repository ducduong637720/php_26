<?php
	$db = mysql_connect("localhost","root","","user");
	$msg = "";
	if (isset($_POST['upload'])) {
		$image = $_FILES['thumbnail']['name'];
		$image_text  = mysql_real_escape_string($db, $_POST['image_text']);
		$target = "images/".basename($image);
		$sql = "INSERT INTO categories (thumbnail) VALUES ('$image')";
		mysql_query($db,$sql);
		$result = mysql_query($db, "SELECT * FROM categories");
	}
?>