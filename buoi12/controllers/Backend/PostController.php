<?php 
require_once('models/Post.php');
require_once('controllers/BaseController.php');
	class PostController extends BaseController
	{
		public function index(){
			$post = new Post();
			$posts = $post->getList();
			$this->view('backend/posts/index.php',[
				'posts'=>$posts
			]);
		}
		// Hiển thị ra form tạo mới
		public function create(){
			$this->view('backend/posts/create.php');
		}
		//Lưu trữ dữ liệu người dùng tạo ra
		public function store(){
			 $data = $_POST;
			 $data_insert = [
		    	'id' => $data['id'],
		      'title' => $data['title'],
		    	'description' => $data['description'],
		    	'thumbnail' => $data['thumbnail'],
		    	'content' => $data['content'],
		      'slug' => $data['slug'],
		      'view_count' => $data['view_count'],
		      'category_id' => $data['category_id'],
		      'user_id' => $data['user_id'],
		      'created_at' => $data['created_at']
		    ];
		    $post = new Post();
		    $posts = $post->create($data_insert);
		    if ($posts == true) {
   	 			setcookie('add_new',"Thêm mới thành công !!!", time()+2);
   			}
		    $this->redirect("index.php?type=backend&mod=post&act=index");
		}
		public function edit(){
			$id = $_GET['id'];
			$post_obj = new Post();
			$post = $post_obj->find($id);
			$this->view('backend/posts/edit.php',['post'=>$post]);
		}
		public function update(){
			$data = $_POST;
			$data_insert = [
				'title' => $data['title'],
				'description' => $data['description'],
				'thumbnail' => $data['thumbnail'],
				'content' => $data['content'],
				'slug' => $data['slug'],
				'view_count' => $data['view_count'],
				'category_id' => $data['category_id'],
				'user_id' => $data['user_id'],
				'created_at' => $data['created_at']
			];
			$post= new Post();
			$posts = $post->fix($data_insert,$data['id']);
			if ($posts == true) {
				setcookie('update',"Đã update thông tin thành công", time()+2);
			}
			$this->redirect("index.php?type=backend&mod=post&act=index");
		}
		public function detail(){
			$id = $_GET['id'];
			$category_id = $_GET['category_id'];
			$user_id = $_GET['user_id'];

		    $post_obj = new Post();
			$post = $post_obj->find($id);

			$category_obj = new Post();
			$category_name = $category_obj->findC($category_id );
			$user_obj = new Post();
			$user_name = $category_obj->findU($user_id );
			$this->view('backend/posts/detail.php',[
				'post' => $post,
				'category_name' => $category_name,
				'user_name' => $user_name
			]);
		}
		public function delete(){
			$id = $_GET['id'];
			$post_obj = new  Post();
			$post = $post_obj->del($id);
			if ($post == true) {
				setcookie('delete',"Xóa một bài viết thành công", time()+2);
			}
			$this->redirect("index.php?type=backend&mod=post&act=index");
		}
	}
 ?>