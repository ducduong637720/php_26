<?php
 var_dump($_GET);

if (isset($_GET['address'])) {
	echo  $_GET['address'];
}else{
	echo "khong co";
}

?>