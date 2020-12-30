<?php 
$name = array('Ngọc','Đức','Vượng','Hiếu','Công');
// var_dump(in_array('Đức', $name));
// echo "Số lượng phần tử trong mảng: " . count($name);

$info = array(
    'ID' => '637720',
    'Name' => 'Đức';
    'Phone' => '0971438184';
    'Eamil' => 'ducxxauzai';
);

if (array_key_exists(ID, $info)) {
	echo "Id" .$info['ID'];
}else {
	echo "Không tồn tại key";
}
array_push($info, 'new1','new2','abc');
$del = array_pop($info);
echo $del;
unset($info['Id']);
var_dump(expression)



?>