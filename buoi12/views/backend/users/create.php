<?php require_once('views/backend/includes/header.php') ?>
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h3 align="center">Thêm người dùng</h3>
            </div>
		    <hr>
		        <form action="index.php?type=backend&mod=user&act=store" method="POST" role="form" enctype="multipart/form-data">
		             <div class="form-group">
		                <label for="">ID</label>
		                <input type="text" class="form-control" id="" placeholder="" name="id">
		            </div>
		            <div class="form-group">
		                <label for="">Name</label>
		                <input type="text" class="form-control" id="" placeholder="" name="name">
		            </div>
		            <div class="form-group">
		                <label for="">Email</label>
		                <input type="text" class="form-control" id="" placeholder="" name="email">
		            </div>
		            <div class="form-group">
		                <label for="">Password</label>
		                <input type="text" class="form-control" id="" placeholder="" name="password">
		            </div>
		            <div class="form-group">
		                <label for="">Avatar</label>
		                <input type="text" class="form-control" id="" placeholder="" name="avatar">
		            </div>
		            <div class="form-group">
		                <label for="">Created At</label>
		                <input type="text" class="form-control" id="" placeholder="" name="created_at">
		            </div>
		            <button type="submit" class="btn btn-primary">Create</button>
		        </form>
     

    </div>
 <?php require_once ('views/backend/includes/footer.php') ?>