<?php 
function kiem_tra_chuoi_palindrome($string){
	if ($string == strrev($string)) {
		return 1;
	}else{
		return 0;
	}
}
echo kiem_tra_chuoi_palindrome('ducduong');

?>