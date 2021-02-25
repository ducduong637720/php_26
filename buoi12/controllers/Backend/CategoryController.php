<?php 
require_once('controllers/BaseController.php');
/**
 * 
 */
class CategoryController extends BaseController
{
	
	public function index()
	{
		$category = new Category();
		$categories = $category->getList();
		$this->view('backend/categories/index.php');

	}
}
?>