<?php
function kiem_tra_Chan_le($number){
	if ($number % 2 == 0) 
		return true;
		else return false;
}

function kiem_tra_chan_le2($number){
	if ($number % 2 == 0){
		echo "Số chăn";
	} else{
		echo "Số lẻ";
	}
}

$number  = 13;
kiem_tra_chan_le2($number);
if (kiem_tra_tra_so_chan($number)) {
	echo "Số chẵn";
}else{
	echo "SỐ lẻ";
}


function tinhtong($a , $b , $c = false){
	$tong = $a + $b;
	if ($c != false) {
	    $tong = $tong + $c;
	}
	return $tong;
}


echo tinhtong(2, 3, 9);
?>