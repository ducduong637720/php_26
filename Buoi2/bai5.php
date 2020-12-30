<?php 
$name = "Duong Trong Duc";
echo "$name"."<br>";
$ho_ten = explode(" ", $name);
$so_phan_tu = count($ho_ten);
$ho = $ho_ten[0];
$ten = $ho_ten[$so_phan_tu-1];
echo "$ho"."<br>";
echo "$ten"."<br>";
$ten_dem = "";
for ($i=1; $i < ($so_phan_tu-1) ; $i++) { 
	$ten_dem = $ten_dem.$ho_ten[$i]." ";
	echo "$ten_dem"."<br>";
}

?>