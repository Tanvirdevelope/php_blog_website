<?php
$query = "SELECT * FROM categories WHERE cat_id = $cat_id";
        $select_category_id = mysqli_query($connect, $query);

        while ($row = mysqli_fetch_assoc($select_category_id)){
        $cat_id = $row['cat_id'];
        $cat_name = $row['cat_name'];
        ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
        </div>
        <div class="card-body">
            <!-- Category From Start -->
            <form action="" method="POST">
                <div class="form-group">
                    <label for="Category">Edit Category Name</label>
                    <input type="text" name="category" class="form-control" value="<?php if(isset($cat_id)){ echo $cat_name; } ?>">
                </div>
                <div class="form-group">
                    <input type="submit" name="editcategory" value="Update Category" class="btn btn-primary">
                </div>
            </form>
            <!-- Category From end -->

        </div>
    </div>
    <?php
            }
// update the category value & Insert into the database
   
    if(isset($_POST['editcategory'])){
        $cat_name = $_POST['category'];

        $query = "UPDATE categories SET cat_name='$cat_name' WHERE cat_id='$cat_id'";

        $update_category = mysqli_query($connect, $query);

        if(!$update_category){
            die("Query Faild" . mysqli_error($connect));
        } else{
            header("Location:all_categories.php");
        }
    }
    
    ?>
            
                    
                