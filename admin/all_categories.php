<?php include "includes/header.php" ?>
<?php include "includes/functions.php" ?>


<?php insert_category(); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- PaAdd New Category Field -->
    <div class="row">
        <div class="col-lg-12">
        <h4 class=" text-gray-800">View All Category</h4>
        </div>
    </div>
   
    <div class="row">
        <!-- Add New Category start -->
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Category</h6>
                </div>
                <div class="card-body">
                    <!-- Category From Start -->
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="Category">Add Category Name</label>
                            <input type="text" name="category" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="addcategory" value="Add Category" class="btn btn-primary">
                        </div>
                    </form>
                    <?php
                    echo $message;                   
                    ?>
                    <!-- Category From end -->
                </div>
            </div>
                <!-- Update Category From Start -->
            <?php
                if (isset($_GET['update'])){
                   $cat_id = $_GET['update'];

                   include "includes/updateCategory.php";          
                }
                ?>
        </div>
        <!-- Update Category From End -->

        <!-- View all Category list start -->
      <div class="col-lg-8"><div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">View All Category</h6>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Seriul</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php view_all_category(); ?>                    
                    </tbody>
                  </table>
                </div>
            </div>    
     </div>
        <!-- View all Category list end -->
    </div>
</div>
<!-- /.container-fluid -->
</div>
    
<?php delete_category(); ?>

<?php include "includes/footer.php" ?>
           