<?php
require_once 'controllers/BaseController.php';

/**
 * 
 */
class CategoryController extends BaseController
{

	public function index(){
		$this->view('views/backend/ca');
	}
}
?>