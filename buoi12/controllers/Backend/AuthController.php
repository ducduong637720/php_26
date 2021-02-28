<?php 
	require_once('controllers/BaseController.php');
	require_once('models/User.php');
	class AuthController extends BaseController{
		public function login(){
			$this->view('auth/login.php');
		}
		public function handle(){
			$username = $_POST['user'];
			$pwd = $_POST['password']; 
			
			$user_model = new User();

			$check = $user_model->check($username, $pwd);


			if($check){
				$_SESSION['login'] = true;
				$this->redirect("index.php?type=backend&mod=dashboard");
			}else{
				header("Locaton: index.php?type=backend&mod=auth&act=login");
			}

		}
	
	}
?>