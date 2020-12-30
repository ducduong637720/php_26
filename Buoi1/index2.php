<?php 
 $numb = 4;
 if($numb > 0){
 	echo "Số" . $numb . " là số dương"."<br>";
 	if ($numb % 2 == 0) {
 	    echo "Số" . $numb . " Là số dương chẵn";
 	}else{
 		echo "Số" . $numb . " Là số dương lẻ";

 	}
}else if ($numb < 0) {
	echo "Số". $numb . " là số âm";
 	if ($numb % 2 == 0) {
 	    echo "Số" . $numb . " Là số âm chẵn";
 	}else{
 		echo "Số" . $numb . " Là số âm lẻ";
 	}
}else{
	echo "Số" . $numb . " Là số 0";
}

?>