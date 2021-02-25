
<?php
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}else{

?>

<?php 

 if(isset($_GET['edit_cat'])){
     $edit_cat_id = $_GET ['edit_cat'];
     $edit_cat_query = "select * from categories where cat_id='$edit_cat_id'";
     $run_edit = mysqli_query($con,$edit_cat_query);
     $row_edit = mysqli_fetch_array($run_edit);
     $cat_id = $row_edit['cat_id'];
     $cat_title = $row_edit['cat_title'];
     $cat_top = $row_edit['cat_top'];
     $cat_image = $row_edit['cat_image'];




 }

?>
<div class="row">
    <!-- row 1 start -->
    <div class="col-lg-12">
        <!-- col-lg-12 start -->
        <ol class="breadcrumb">
            <!--breadcrumb start -->

            <li class="fa fa-dashboard"></li> Dashboard / Edit Category

        </ol>
        <!--breadcrumb end -->
    </div><!-- col-lg-12 end -->
</div><!-- row 1 end -->

<div class="row">
    <!-- row 2 start -->
    <div class="col-lg-12">
        <!-- col-lg-12 start -->
        <div class="panel panel-default">
            <!-- panel panel-default start -->
            <div class="panel-heading">
                <!-- panel-heading start -->
                <h3 class="panel-title">
                    <!-- panel-title start -->

                    <i class="fa fa-pencil fa-fw"></i> Edit Category

                </h3><!-- panel-title end -->

            </div><!-- panel-heading end -->

            <div class="panel-body">
                <!-- panel-body start -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <!-- form-horizontal start -->
                    <div class="form-group">
                        <!-- form-group start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                            Category Title

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input value="<?php echo  $cat_title; ?>" name="cat_title" type="text" class="form-control">

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group end -->

                    
                    <div class="form-group">
                        <!-- form-group 2 start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                            Choose as top manufacturer                        

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                           
                            <input  type="radio" name="cat_top" value="yes"
                            
                                <?php  

                                   if($cat_top=='no'){}else{echo"checked='checked'";}

                                ?>

                            >

                            <label>Yes</label>

                            <input  type="radio" name="cat_top" value="no"
                            
                             <?php
                             
                                  if($cat_top=='no'){echo"checked='checked'";}
                             
                             ?>
                            
                            >
                            
                            <label>No</label>

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 2 end -->

                    <div class="form-group">
                        <!-- form-group 3 start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                            Category Image

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input  type="file" name="cat_image" class="form-control">
                              <br>

                            <img width="70" height="70" src="other_images/<?php echo $cat_image; ?>"
                             alt="<?php echo $cat_image; ?>">

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 3 end -->


                    <div class="form-group">
                        <!-- form-group start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->



                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input value="Update Category" name="update" type="submit" class="form-control btn btn-primary">

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group end -->

                </form><!-- form-horizontal end -->
            </div><!-- panel-body end -->

        </div><!-- panel panel-default end -->
    </div><!-- col-lg-12 end -->
</div><!-- row 2 end -->
<script src="js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({selector: 'textarea'});

    </script>
<?php 

  if(isset($_POST['update'])){
    $cat_title = $_POST['cat_title'];
    $cat_top = $_POST['cat_top'];
    if(is_uploaded_file($_FILES['cat_image']['tmp_name'])){
        
    $cat_image = $_FILES['cat_image']['name'];
    $temp_name = $_FILES['cat_image']['tmp_name'];


    $update_cat = "update categories set cat_title='$cat_title',cat_top='$cat_top',cat_image='$cat_image' 
    where cat_id='$cat_id'";
    $run_cat = mysqli_query($con,$update_cat);
    if($run_cat){
        echo "<script>alert('Your category section has been updated!')</script>";
        echo "<script>window.open('index.php?view_cats','_self')</script>";
            }

         }else{
            $update_cat = "update categories set cat_title='$cat_title',cat_top='$cat_top'
            where cat_id='$cat_id'";
            $run_cat = mysqli_query($con,$update_cat);
            if($run_cat){
                echo "<script>alert('Your category section has been updated!')</script>";
                echo "<script>window.open('index.php?view_cats','_self')</script>";
                    }
         }
    }

?>

<?php } ?>