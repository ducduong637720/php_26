<?php 
require_once('core/Model.php');
class Category extends Model{
	private $table = 'categories';
	public function getList(){

	 $categories = $this->select($this->table,['id','name','description','thumbnail']);
	 return $categories;
	}

	public function create($data){
	 	$status = $this->insert($this->table, $data);
	 	return $status;
	 }
	 function find($id){
	 	 $category = $this->getId($this->table,$id);
	 	 return $category;
	 }
	 //  function delete($data){
	 // 	$status = $this->delete($this->table, $data);
	 // 	return $status;
	 // }
	 // function store(){
	 // 	$data = $_POST;
	 // 	$data_insert = [
  //         'name' => $data['name'],
  //         'description' => $data['description']


	 // 	];


  //         $category = new Category();
  //         $status = $category->create($data_insert);
  //         header("Location: index.php?mod=categories&act=list");
	 // }

}
?>