<?php 
require_once('controllers/BaseController.php');
/**
 * 
 */
class DashboardController extends BaseController
{
	
	public function index()
	{
		$this->view('backend/dashboard/index.php');
	}
}
?>