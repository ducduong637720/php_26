<?php require_once('views/backend/includes/header.php') ?>
               <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                       <h3 class="text-center">Danh mục</h3>
        			<a href="index.php?type=backend&mod=user&act=index" class="btn btn-primary">Quay lại</a>
                    </div>
                    <div class="row">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#ID</th>
                              <th scope="col">Tên</th>
                              <th scope="col">Email</th>
                              <th scope="col">Password</th>
                              <th scope="col">Avatar</th>
                              <th scope="col">Create_at</th>
                            </tr>
                          </thead>
                         <tr>
			            	<td><?php echo $user['id'] ?></td>
			                <td><?php echo $user['name'] ?></td>
			                <td><?php echo $user['email'] ?></td>
			                <td>
			                   	<?php echo $user['password']; ?>
			                </td>
			                 <td><?php echo $user['avatar']; ?></td>
			                 <td><?php echo $user['created_at']; ?></td>
			            	</tr>
                        </table>
                   </div> <!-- Content Row -->
             </div>
                    <!-- Content Row -->
              
                <!-- /.container-fluid -->
  <?php require_once ('views/backend/includes/footer.php') ?>
