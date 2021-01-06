<?php 
require_once "uploadFile.php";

if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        $uploads = file_upload("uploads","ANH_SP",500000,array('JPG', 'png','jpg'));
        if(gettype($uploads) == "array"){
            print_r($uploads); // Trả về mảng lỗi nếu ko upload được
        }else{
            echo "File name is: " . $uploads; // Trả về tên file nếu upload thành công
        }
    }
?>