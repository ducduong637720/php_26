<?php require_once('views/backend/includes/header.php') ?>
               <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                       <h3 class="text-center">Danh mục bài viết</h3>
                    <a href="index.php?type=backend&mod=post&act=index" class="btn btn-primary">Quay lại</a>
                    </div>
                    <div class="row">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#ID</th>
                              <th scope="col">Title</th>
                              <th scope="col">Thumbnail</th>
                              <th scope="col">Content</th>
                              <th scope="col">View</th>
                              <th scope="col">Category</th>
                              <th scope="col">User</th>
                              <th scope="col">Release</th>
                            </tr>
                          </thead>
                         <tr>
                           <td><?php echo $post['id'] ?></td>
                            <td style="width: 300px"><?php echo $post['title'] ?></td>
                            <td><?php echo $post['thumbnail']; ?></td>
                            <td><p style="width:400px; height: 300px; overflow: auto;"><?php echo $post['content']?></p></td>
                            <td><?php echo $post['view_count']; ?></td>
                            <td><?php echo $category_name['name']; ?></td>
                            <td><?php echo $user_name['name']; ?></td>
                            <td><?php echo $post['created_at']; ?></td>
                            </tr>
                        </table>
                   </div> <!-- Content Row -->
             </div>
                    <!-- Content Row -->
              
                <!-- /.container-fluid -->
  <?php require_once ('views/backend/includes/footer.php') ?>
