<?php 
// $array = [1,'Zent','Be all you can be!'];

// var_dump($array);

$array_name = array(
0 => 'Zent',
9 => 'Be all you can be!',
);

$array_name['name'] = 'Zent group';
$array_name[2] = 'Be all you can be!';
$array_name[3] =2;

// print_r($array_name);
// echo "<br> Phần tử thứ 1 là: " . $array_name[0];
// echo "<br> Phần tử thứ 1 là: " . $array_name[2];
// echo "<br> Phần tử thứ 1 là: " . $array_name['name'];
foreach ($array_name as $key => $value) {
	if ($key == 9) {
		continue;
	}
	echo "<br> Phần tử thứ " . $key. ":" . $value ;
}
$array_name1[0] = 'Zent group';
$array_name1[1] = 'Be all you can be!';
$array_name1[2] =2;
$array_name1[3] = 'Zents group';
$array_name1[4] = 'Be all';
$array_name1[5] =4;


for ($i=0; $i < count($array_name1) ; $i++) { 
	echo "<br> Phàn tử thứ ". $i . ":" . $array_name1[$i];
}
?>