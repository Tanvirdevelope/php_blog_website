<?php include "includes/header.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Publish Another New Post</h1>
       <div class="row">
       <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Post</h6>
                </div>
                <div class="card-body">
                    <!-- Add Post Form start -->
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="post_title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="post_desc" class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="post_author">Post Auther</label>
                            <input type="text" name="post_author" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="post_thumbnail">Post Thumnail</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label for="post_category">Post Category</label>
                            <input type="text" name="post_category" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <input type="text" name="post_tags" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="add-post" value="Publish Post" class="btn btn-primary">
                        </div>
                    </form>            
                    <!-- Add Post Form end -->
                </div>
            </div>
        </div>
       </div>
    </div>
    <!-- /.container-fluid -->
    <?php
    // Add new blog post function
    if (isset($_POST['add-post'])) {
        $post_title     = $_POST['post_title'];
        $post_desc      = $_POST['post_desc'];
        $post_author    = $_POST['post_author'];

        $post_image     = $_POST['image']['name'];
        $post_image_tmp = $_POST['image']['tmp_name'];

        $post_category  = $_POST['post_category'];
        $post_tags      = $_POST['post_tags'];
    }
    
    ?>
</div>
<!-- End of Main Content -->
</div>
<?php include "includes/footer.php" ?>
           