<?php require_once('views/backend/includes/header.php') ?>
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h3 align="center">Thêm danh mục</h3>
            </div>
            
                 <form action="index.php?type=backend&mod=category&act=store" method="POST" role="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" class="form-control" id="" placeholder="" name="id">
                    </div>
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" class="form-control" id="" placeholder="" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Parent ID</label>
                        <input type="text" class="form-control" id="" placeholder="" name="parent_id">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
                    </div>
                    <div class="form-group">
                        <label for="">Chi tiết</label>
                        <input type="text" class="form-control" id="" placeholder="" name="slug">
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <input type="text" class="form-control" id="" placeholder="" name="description">
                    </div>
                    <div class="form-group">
                        <label for="">Created At</label>
                        <input type="text" class="form-control" id="" placeholder="" name="created_at">
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
        <div class="row">
            </div>

    </div>
 <?php require_once ('views/backend/includes/footer.php') ?>