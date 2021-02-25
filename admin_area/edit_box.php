
<?php
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}else{

?>

<?php 

 if(isset($_GET['edit_box'])){
     $edit_box_id = $_GET ['edit_box'];
     $edit_box_query = "select * from boxes_section where box_id='$edit_box_id'";
     $run_edit_box = mysqli_query($con,$edit_box_query);
     $row_edit_box = mysqli_fetch_array($run_edit_box);
     $box_id = $row_edit_box['box_id'];
     $box_title = $row_edit_box['box_title'];
     $box_desc = $row_edit_box['box_desc'];
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

                    <i class="fa fa-pencil fa-fw"></i> Edit Box

                </h3><!-- panel-title end -->

            </div><!-- panel-heading end -->

            <div class="panel-body">
                <!-- panel-body start -->
                <form action="" class="form-horizontal" method="post">
                    <!-- form-horizontal start -->
                    <div class="form-group">
                        <!-- form-group start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                            Box Title

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input value="<?php echo $box_title; ?>" name="box_title" type="text" class="form-control">

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group end -->

                    <div class="form-group">
                        <!-- form-group start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                        Box Description

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <textarea  type="text" name="box_desc" id="" cols="30" rows="10"
                                class="form-control"><?php echo $box_desc; ?></textarea>

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group end -->

                    <div class="form-group">
                        <!-- form-group start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->



                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input value="Update Box" name="update_box" type="submit" class="form-control btn btn-primary">

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
    $box_title = $_POST['box_title'];
    $box_desc = $_POST['box_desc'];
    $update_box = "update boxes_section set box_title='$box_title',box_desc='$box_desc' where box_id='$box_id'";
    $run_box = mysqli_query($con,$update_box);
    if($run_box){
        echo "<script>alert('Your box section has been updated!')</script>";
        echo "<script>window.open('index.php?view_boxes','_self')</script>";
    }
  }

?>
<?php } ?>