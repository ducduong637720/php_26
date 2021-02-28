<?php require_once('views/backend/includes/header.php') ?>
               <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                       <h3 class="text-center">Danh mục</h3>
        			<a href="index.php?type=backend&mod=category&act=index" class="btn btn-primary">Quay lại</a>
                    </div>
                    <div class="row">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#ID</th>
                              <th scope="col">Tên</th>
                              <th scope="col">Ảnh</th>
                              <th scope="col">Chi tiết</th>
                              <th scope="col">Mô tả</th>
                              <th scope="col">Create_at</th>
                            </tr>
                          </thead>
                         <tr>
			            	<td><?php echo $category['id'] ?></td>
			                <td><?php echo $category['name'] ?></td>
			                <td>
			                   	<?php echo $category['thumbnail']; ?>
			                </td>
			                 <td><?php echo $category['slug']; ?></td>
			                <td><?php echo $category['description']; ?></td>
			                 <td><?php echo $category['created_at']; ?></td>
			            	</tr>
                        </table>
                   </div> <!-- Content Row -->
             </div>
                    <!-- Content Row -->
              
                <!-- /.container-fluid -->
  <?php require_once ('views/backend/includes/footer.php') ?>
