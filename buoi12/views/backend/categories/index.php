<?php require_once('views/backend/includes/header.php') ?>
<!-- Begin Page Content -->
               <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Danh sách danh mục</h1>
                        <a href="index.php?type=backend&mod=category&act=create" class="btn btn-primary">Thêm mới danh mục</a>
                    </div>
                    <div class="row">
                        <table class="table">
                           <?php if (isset($_COOKIE['add_new'])) { ?>
                              <div class="alert alert-success" role="alert">
                                <?php echo $_COOKIE['add_new'] ?>
                              </div>
                          <?php } ?>
                          <?php if (isset($_COOKIE['update'])) { ?>
                              <div class="alert alert-info" role="alert">
                                <?php echo $_COOKIE['update'] ?>
                              </div>
                          <?php } ?>
                          <?php if (isset($_COOKIE['delete'])) { ?>
                              <div class="alert alert-danger" role="alert">
                                <?php echo $_COOKIE['delete'] ?>
                              </div>
                          <?php } ?>
                          <thead>
                            <tr>
                              <th scope="col">#ID</th>
                              <th scope="col">Tên</th>
                              <th scope="col">Ảnh</th>
                              <th scope="col">Mô tả</th>
                              <th scope="col">Hành động</th>
                            </tr>
                          </thead>
                          <tbody>
                                          <?php foreach ($categories as  $value) { ?>
                          <tr>
                          <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['name'] ?></td>
                            <td>
                                <?php echo $value['thumbnail']; ?>
                            </td>
                            <td><?php echo $value['description']; ?></td>
                            <td>
                                <a href="index.php?type=backend&mod=category&act=detail&id=<?php echo $value['id']?>" class="btn btn-primary">Detail</a>
                                <a href="index.php?type=backend&mod=category&act=edit&id=<?php echo $value['id']?>" class="btn btn-success">Edit</a>
                                <a href="index.php?type=backend&mod=category&act=delete&id=<?php echo $value['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                           <?php } ?>  
                          </tbody>
                        </table>
                       
                   </div> <!-- Content Row -->
             </div>
                    <!-- Content Row -->
              
                <!-- /.container-fluid -->
  <?php require_once ('views/backend/includes/footer.php') ?>