<?php require_once('views/backend/includes/header.php') ?>
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h3 align="center">Sửa thông người dùng</h3>
            </div>
               <form action="index.php?type=backend&mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $user['name']?>">
                    </div>
                     <div class="form-group">
		                <label for="">Email</label>
		                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?php echo $user['email']?>">
		            </div>
		            <div class="form-group">
		                <label for="">Password</label>
		                <input type="text" class="form-control" id="" placeholder="" name="password" value="<?php echo $user['password']?>">
		            </div>
                      <div class="form-group">
		                <label for="">Ảnh đại diện</label>
		                <input type="text" class="form-control" id="" placeholder="" name="avatar" value="<?php echo $user['avatar']?>">
		            </div>
                     <div class="form-group">
                        <label for="">Created At</label>
                        <input type="text" class="form-control" id="" placeholder="" name="created_at"  value="<?php echo $user['created_at']?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                </form>
      

    </div>
 <?php require_once ('views/backend/includes/footer.php') ?>
