<?php 

$numb = 4;

if ($numb == 2) {
	echo "Hôm nay là thứ hai";
}else if ($numb == 3) {
	echo "Hôm nay là thứ ba";
}else if ($numb == 4) {
	echo "Hôm nay là thứ tư";
}else if ($numb == 5) {
	echo "Hôm nay là thứ năm";
}else if ($numb == 6) {
	echo "Hôm nay là thứ sáu";
}else if ($numb == 7) {
	echo "Hôm nay là thứ bảy";
}else if ($numb == 8) {
	echo "Hôm nay là chủ nhật";
}else{
	echo "Không phù hợp";
}
echo "<br>";
 


$numb = 7;

switch ($numb) {
	case 2:{
		echo "Hôm nay là thứ hai";
	}
		break;
	case 3:{
		echo "Hôm nay là thứ ba";
	}
		break;
	case 4:{
		echo "Hôm nay là thứ tư";
	}
		break;
	case 5:{
		echo "Hôm nay là thứ năm";
	}
		break;			
	case 6:{
		echo "Hôm nay là thứ sáu";
	}
		break;
	case 7:{
		echo "Hôm nay là thứ bảy";
	}
		break;
	case 8:{
		echo "Hôm nay là thứ chủ nhật";
	}
		break;		
	default:{
		echo "Không phù hợp";
		}break;
    }

?>