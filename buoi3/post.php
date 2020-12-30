<?php 
if (isset($_POST['form_click'])){
    echo 'Mã sinh Viên: ' . $_POST['id'] . '<br>';
	echo 'HỌ và tên: ' . $_POST['user'] . '<br>';
	echo 'Số điện thoại: ' . $_POST['sdt'] . '<br>';
	echo 'Email: ' . $_POST['email'] . '<br>';
	echo 'Địa chỉ: ' . $_POST['adress'] . '<br>';
	echo 'Giới tính: ' . $_POST['gender'] . '<br>';              
}
?>