<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<table class="table">
  <thead>
    <tr>
      <th>Mã sinh viên</th>
      <th>Họ tên</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
    	if (isset($_SESSION['user'])) {
    		foreach ($_SESSION['$users'] as $user) {
    ?>	
        <tr>
        	<td><?php echo $user['id']; ?></td>
        	<td><?php echo $user['name']; ?></td>
        	<td><?php echo $user['email']; ?></td>
        	<td>
        		<button class="btn btn-info">Sửa</button>
        		<button class="btn btn-danger">Xóa</button>
        	</td>
        </tr>

    		}
    	}
  
  </tbody>
</table>
</body>
</html>