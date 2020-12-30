<?php 
for ($i = 10; $i >= 0; $i--) { 
	for ($j = 10-$i; $j >= 0 ; $j--) { 
		echo "&nbsp&nbsp";
	}
	for ($k=$i; $k >= 0 ; $k--) { 
		echo "*";
	}
	echo "<br>";
}
?>