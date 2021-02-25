<?php 
// session_start();
    $mod = "home";
	$act = "index";
	$type = "frontend";

	if(isset($_GET['mod'])){
		$mod = $_GET['mod'];
	}
	if(isset($_GET['act'])){
		$act = $_GET['act'];
	}
	if(isset($_GET['type'])){
		$type = $_GET['type'];
	}


	$class_name = ucfirst($mod) . "Controller";

	$path = "controllers/" .ucfirst($type) . "/" . $class_name . ".php";
	if(!file_exists($path)){
		echo "File $path khong ton tai";
		exit();
	}
	require_once($path);

	$Controller_obj = new $class_name();
	if(!method_exists($Controller_obj, $act)){
		echo "method $act() khong ton tai";
		exit();
	}
	
	$Controller_obj->$act();
?>