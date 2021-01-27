<?php 
require_once('models/Category.php');
class CategoryController{
	public function list(){
		$category = new Category();
		$categories = $category->getList();
		require_once('views/categories/list.php');
	}
	public function create(){
		require_once('views/categories/create.php');

	}
    public function store(){
		require_once('views/categories/create.php');
		$data = $_POST;
	 	$data_insert = [
          'name' => $data['name'],
          'description' => $data['description']


	 	];
          $category = new Category();
          $status = $category->create($data_insert);
          header("Location: index.php?mod=categories&act=list");


	}
	public function edit(){
		$id = $_GET['id'];
		$category_obj = new Category();
		$category = $category_obj->find($id);
		require_once('views/categories/edit.php');
	}
	public function update(){
		require_once('views/categories/update.php');
		$data = $_POST;
	 	$data_insert = [
          'name' => $data['name'],
          'description' => $data['description']

	}


}

?>