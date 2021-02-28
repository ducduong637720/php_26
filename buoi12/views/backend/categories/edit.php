<?php require_once('views/backend/includes/header.php') ?>
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h3 align="center">Sửa thông tin danh mục</h3>
            </div>
               <form action="index.php?type=backend&mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $category['id'] ?>">
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $category['name']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Parent ID</label>
                        <input type="text" class="form-control" id="" placeholder="" name="parent_id" value="<?php echo $category['parent_id']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input type="text" class="form-control" id="" placeholder="" name="thumbnail" value="<?php echo $category['thumbnail']?>">
                    </div>
                     <div class="form-group">
                        <label for="">Chi tiết</label>
                        <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?php echo $category['slug']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <input type="text" class="form-control" id="" placeholder="" name="description"  value="<?php echo $category['description']?>">
                    </div>
                     <div class="form-group">
                        <label for="">Created At</label>
                        <input type="text" class="form-control" id="" placeholder="" name="created_at"  value="<?php echo $category['created_at']?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                </form>
        <div class="row">
            </div>

    </div>
 <?php require_once ('views/backend/includes/footer.php') ?>
