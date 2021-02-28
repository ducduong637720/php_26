<?php
session_start();
$username = $_POST['user'];
$pwd = $_POST['pwd']; 
// echo $username . '-' .$pwd;
$check = check($username,$pwd);
if ($check) {
	echo "co user";
	$_SESSION['login'] = true;
	setcookie('success','Dang nhap thanh cong',time()+2);
	header("Location: index.php");

}else {
	setcookie('error','Dang nhap khong thanh cong',time()+2);
	 echo "khong co user";
}
function check($username, $pwd){
	$users = [
		[	
			'username' => 'duc',
			'password' => '12345',
		],

		[
			'username' => 'ngoc',
			'password' => '123456',
		]
	];

	foreach ($users as $user) {
		if ($user['username'] == $username && $user["password"] == $pwd) {
			return true;
		}
	}
      return false;
}
?>