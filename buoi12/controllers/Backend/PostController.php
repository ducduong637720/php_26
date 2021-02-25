<?php 
require_once('controllers/BaseController.php');
/**
 * 
 */
class PostController extends BaseController
{
	
	public function index()
	{
		$this->view('backend/posts/index.php');
	}
}
?>