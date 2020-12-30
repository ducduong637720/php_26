<?php 
$biein_toan_cuc = 12;


function kiemtra(){

	// $bien_cuc_bo = 13;
	// $bien_cuc_bo++;
	// echo $bien_cuc_bo;


	global $bien_toan_cuc;
	$bien_toan_cuc++;
	echo $bien_toan_cuc;
}
kiemtra();
kiemtra();


function kiem_tra_2()
{
    static $a = 0;
    $a++;
    if ($a > 5) {
    	echo "fail";
    }else{
        echo $a;
    }
}

kiem_tra_2();
kiem_tra_2();
8	kiem_tra_2();


?>