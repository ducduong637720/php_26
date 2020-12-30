<?php 
$array = [1,3,5,6,7,10,14];
$max = null;
$position = null;
for ($i=0; $i < count($array); $i++) { 
	if ($max == null) {
		$max = $array[$i];
		$position = $i;
	}else{
		if ($array[$i]> $max) {
			$max = $array[$i];
		    $position = $i; 
		}
	}
}
echo "GTLN là $max, nằm ở vị trí $position ";
?>