<?php 
require_once('models/Category.php');
require_once('controllers/BaseController.php');
class CategoryController extends BaseController {
	public function list(){
		$category = new Category();
		$categories = $category->getList();
		echo($categories);
		die();
		// 
		$this->view('categories/list.php',['categories' => $categories,]);
	}
	public function create(){
		// require_once('views/categories/create.php');
		$this->view('categories/create.php');

	}
    public function store(){
		// require_once('views/categories/create.php');
		$this->view('categories/create.php');
		$data = $_POST;
	 	$data_insert = [
          'name' => $data['name'],
          'description' => $data['description']


	 	];
          $category = new Category();
          $status = $category->create($data_insert);
          // header("Location: index.php?mod=categories&act=list");
          $this->redirect('index.php?mod=categories&act=list');

	}
	public function edit(){
		$id = $_GET['id'];
		$category_obj = new Category();
		$category = $category_obj->find($id);
		// require_once('views/categories/edit.php');
		$this->view('categories/edit.php',['categories' => $categories,]);
	}
	public function update(){
		require_once('views/categories/update.php');
		$data = $_POST;
	 	$data_insert = [
          'name' => $data['name'],
          'description' => $data['description']
      ];

	}


}


?>