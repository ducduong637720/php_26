<?php 
require_once('controllers/BaseController.php');
/**
 * 
 */
class UserController extends BaseController
{
	
	public function index()
	{
		$this->view('backend/users/index.php');
	}
}
?>