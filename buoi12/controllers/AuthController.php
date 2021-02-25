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
			echo $username . '-' . $pwd;
			$user_model = new User();

			$check = $user_model->check($username, $pwd);

			if($check){
				$_SESSION['login'] = true;
				echo "Dang nhap thanh cong";
			}else{
				echo "Dang nhap khong thanh cong";
			}

		}
	
	}
?>