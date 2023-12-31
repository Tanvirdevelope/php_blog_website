<?php include "includes/header.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Blog Post</h1>
       <div class="row">
       <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Blog Posts</h6>
                </div>
                <div class="card-body">
                    <!-- Blog post table start -->
                    <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">SL.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Post Category</th>
                        <th scope="col">Post Date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $query = "SELECT * FROM posts";
                         $select_all_post = mysqli_query($connect, $query);
                         $i = 0;

                         while( $row = mysqli_fetch_assoc($select_all_post)){

                            $post_id            = $row['post_id'];
                            $post_title         = $row['post_title'];
                            $post_description   = $row['post_description'];
                            $post_author        = $row['post_author'];
                            $post_thumb         = $row['post_thumb'];
                            $post_category      = $row['post_category'];
                            $post_tags          = $row['post_tags'];
                            $post_date          = $row['post_date'];
                            $i++;
                            ?>
                            <tr>
                            <td scope="row"><?php echo $i ?></td>
                            <td><?php echo $post_title ?></td>
                            <td><?php echo $post_author ?></td>
                            <td><?php echo $post_category ?></td>
                            <td><?php echo $post_date ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="" class="btn btn-primary btn-sm">Update</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </td>
                            </tr> 
                        <?php
                         }
                        ?>                                          
                    </tbody>
                  </table>
                    <!-- Blog post table end -->
                </div>
            </div>
        </div>
       </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
</div>
<?php include "includes/footer.php" ?>
           