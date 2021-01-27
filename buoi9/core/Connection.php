<?php 
class Connection{
	private $servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

	private $username = "root";   // Tên đăng nhập
		
	private $password = "";    // Mật khẩu truy cập
		
	private $dbname = "user";

	public function connect(){
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($conn->connect_errno) {
			echo "Failed to connect to MySQL" .$conn->connect_errno;
			exit();
		}
		return $conn;
	}
}
?>