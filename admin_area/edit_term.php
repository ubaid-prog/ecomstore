
<?php
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}else{

?>

<?php 

 if(isset($_GET['edit_term'])){
     $edit_id = $_GET ['edit_term'];
     $get_term = "select * from terms where term_id='$edit_id'";
     $run_term = mysqli_query($con,$get_term);
     $row_term = mysqli_fetch_array($run_term);
     $term_id = $row_term['term_id'];
     $term_title = $row_term['term_title'];
     $term_link = $row_term['term_link'];
     $term_desc = $row_term['term_desc'];
 }

?>
<div class="row">
    <!-- row 1 start -->
    <div class="col-lg-12">
        <!-- col-lg-12 start -->
        <ol class="breadcrumb">
            <!--breadcrumb start -->

            <li class="fa fa-dashboard"></li> Dashboard / Edit Terms

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

                    <i class="fa fa-pencil fa-fw"></i> Edit terms

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

                            Terms Title

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input value="<?php echo $term_title; ?>" name="term_title" type="text" class="form-control">

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group end -->

                    <div class="form-group">
                        <!-- form-group start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                            Terms Link

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input value="<?php echo $term_link; ?>" name="term_link" type="text" class="form-control">

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group end -->

                    <div class="form-group">
                        <!-- form-group start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                        Term Description

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->
                               
                            <textarea  type="text" name="term_desc" id="" cols="30" rows="10"
                                class="form-control"><?php echo $term_desc; ?></textarea>

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group end -->

                    <div class="form-group">
                        <!-- form-group start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->



                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input value="Update Term" name="update" type="submit" class="form-control btn btn-primary">

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
    $term_title = $_POST['term_title'];
    $term_link = $_POST['term_link'];
    $term_desc = $_POST['term_desc'];
    $update_term = "update terms set term_title='$term_title',term_link='$term_link',term_desc='$term_desc' where term_id='$term_id'";
    $run_term = mysqli_query($con,$update_term);
    if($run_term){
        echo "<script>alert('Your term section has been updated!')</script>";
        echo "<script>window.open('index.php?view_terms','_self')</script>";
    }
  }

?>
<?php } ?>
