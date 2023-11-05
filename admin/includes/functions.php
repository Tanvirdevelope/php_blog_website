<?php
// delete category from the all categories page
function delete_category(){
    global $connect;
    if(isset($_GET['delete'])){
        $cat_id = $_GET['delete'];

        $query = "DELETE FROM categories WHERE cat_id = '$cat_id'";

        $delete_category = mysqli_query($connect, $query);

        if(!$delete_category){
            die("Query Faild" . mysqli_error($connect));
        } else{
            header("Location:all_categories.php");
        }

    }
    
}

?>

<?php
        function view_all_category(){
        global $connect;
        $i = 0;
        $query = "SELECT * FROM categories";
        $select_categories = mysqli_query($connect, $query);

        while ($row = mysqli_fetch_assoc($select_categories))
        {   
            $i++;
            $cat_id     = $row['cat_id'];
            $cat_name   = $row['cat_name'];
        ?>
        <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $cat_name ?></td>
        <td>
            <div class="btn-group">
                <a href="all_categories.php?update=<?php echo $cat_id; ?>" class="btn btn-primary btn-sm">Update</a>
                <a href="all_categories.php?delete=<?php echo $cat_id; ?>" class="btn btn-danger btn-sm">Delete</a>
            </div>
        </td>
        </tr>
        <?php
        }
        }
    ?>

    <?php
    function insert_category(){
        global $connect;
        global $message;
        $message = '';
        if(isset($_POST['addcategory'])){
            $cat_title = $_POST['category'];
    
            if(empty($cat_title)){
                $message = '<div class="alert alert-warning">Category Name Cannot be Empty.</div>';
            } else{
                $query = "INSERT INTO categories (cat_name) VALUES ('$cat_title')";
                $addCategory = mysqli_query($connect, $query);
    
                if(!$addCategory){
                    die("Query Faild" . mysqli_error($connect));
                } else{
                    $message = '<div class="alert alert-success">Category Name Added Successfully</div>';
                }
            }
        }
    }
    
    ?>