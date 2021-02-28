<?php require_once('views/backend/includes/header.php') ?>
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h3 align="center">Thêm bài viết </h3>
            </div>
		    <hr>
		        <form action="index.php?type=backend&mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="id">
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder=""></textarea>
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug">
            </div>
            <div class="form-group">
                <label for="">View Count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count">
            </div>
            <div class="form-group">
                <label for="">Category ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_id">
            </div>
            <div class="form-group">
                <label for="">User ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="user_id">
            </div>
            <div class="form-group">
                <label for="">Created At</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
     

    </div>
 <?php require_once ('views/backend/includes/footer.php') ?>