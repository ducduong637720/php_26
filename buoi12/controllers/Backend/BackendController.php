<?php 
require_once('controllers/BaseController.php');



class BackendController extends BaseController
{
	
	function __construct (){
		if (!isset($_SESSION['login'])) {
			header("Locaton: index.php?type=backend&mod=auth&act=login");
		}
	}

}
?> 