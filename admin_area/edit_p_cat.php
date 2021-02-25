<?php
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}else{

?>

<?php 

 if(isset($_GET['edit_p_cat'])){
     $edit_p_cat_id = $_GET ['edit_p_cat'];
     $edit_p_cat_query = "select * from product_categories where p_cat_id='$edit_p_cat_id'";
     $run_edit = mysqli_query($con,$edit_p_cat_query);
     $row_edit = mysqli_fetch_array($run_edit);
     $p_cat_id = $row_edit['p_cat_id'];
     $p_cat_title = $row_edit['p_cat_title'];
     $p_cat_top = $row_edit['p_cat_top'];
     $p_cat_image = $row_edit['p_cat_image'];




 }

?>
<div class="row">
    <!-- row 1 start -->
    <div class="col-lg-12">
        <!-- col-lg-12 start -->
        <ol class="breadcrumb">
            <!--breadcrumb start -->

            <li class="fa fa-dashboard"></li> Dashboard / Edit Product Category

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

                    <i class="fa fa-pencil fa-fw"></i> Edit Product Category

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

                            Product Category Title

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input value="<?php echo $p_cat_title; ?>" name="p_cat_title" type="text" class="form-control">

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

                           
                            <input  type="radio" name="p_cat_top" value="yes"
                            
                                <?php  

                                   if($p_cat_top=='no'){}else{echo"checked='checked'";}

                                ?>

                            >

                            <label>Yes</label>

                            <input  type="radio" name="p_cat_top" value="no"
                            
                             <?php
                             
                                  if($p_cat_top=='no'){echo"checked='checked'";}
                             
                             ?>
                            
                            >
                            
                            <label>No</label>

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 2 end -->

                    <div class="form-group">
                        <!-- form-group 3 start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                           Product Category Image

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input  type="file" name="p_cat_image" class="form-control">
                              <br>

                            <img width="70" height="70" src="other_images/<?php echo $p_cat_image; ?>"
                             alt="<?php echo $p_cat_image; ?>">

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 3 end -->

                    <div class="form-group">
                        <!-- form-group start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->



                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input value="Update Product Category" name="update" type="submit" class="form-control btn btn-primary">

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
  $p_cat_title = $_POST['p_cat_title'];
  $p_cat_top = $_POST['p_cat_top'];

  if(is_uploaded_file($_FILES['p_cat_image']['tmp_name'])){
      
  $p_cat_image = $_FILES['p_cat_image']['name'];
  $temp_name = $_FILES['p_cat_image']['tmp_name'];


  $update_p_cat = "update product_categories set p_cat_title='$p_cat_title',p_cat_top='$p_cat_top'
  ,p_cat_image='$p_cat_image' where p_cat_id='$p_cat_id'";
  $run_p_cat = mysqli_query($con,$update_p_cat);
  if($run_p_cat){
      echo "<script>alert('Your product category section has been updated!')</script>";
      echo "<script>window.open('index.php?view_p_cats','_self')</script>";
          }

       }else{
          $update_p_cat = "update product_categories set p_cat_title='$p_cat_title',p_cat_top='$p_cat_top',
          where p_cat_id='$p_cat_id'";
          $run_p_cat = mysqli_query($con,$update_p_cat);
          if($run_p_cat){
              echo "<script>alert('Your product category section has been updated!')</script>";
              echo "<script>window.open('index.php?view_p_cats','_self')</script>";
                  }
       }
  }

?>


<?php } ?>