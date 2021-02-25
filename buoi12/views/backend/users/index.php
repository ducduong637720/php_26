<?php require_once('views/backend/includes/header.php') ?>
<body>
    <div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="index.php?mod=categories&act=create" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
            <?php foreach ($categories as $item){ ?>
            <tr>
                <td><?php echo $item['id'];?></td>
                <td><?php echo $item['name'];?></td>
                <td>
                    <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                </td>
                
                <td><?php echo $item['description']; ?></td>
                <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                    <a href="index.php?mod=categories&act=edit&id=<?php echo $item['id'];?>" class="btn btn-success">Edit</a>
                    <a href="categories_delete.php?id=<?php echo $item['id'];?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
           
        <?php }?>
        </table>
    </div>
</body>
<?php require_once('views/backend/includes/footer.php') ?>