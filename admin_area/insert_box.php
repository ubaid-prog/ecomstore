<?php
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}else{

?>

<div class="row">
    <!-- row 1 start -->
    <div class="col-lg-12">
        <!-- col-lg-12 start -->
        <ol class="breadcrumb">
            <!--breadcrumb start -->

            <li class="fa fa-dashboard"></li> Dashboard / Insert Box

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

                    <i class="fa fa-money fa-fw"></i> Insert Box

                </h3><!-- panel-title end -->

            </div><!-- panel-heading end -->

            <div class="panel-body">
                <!-- panel-body start -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <!-- form-horizontal start -->
                    <div class="form-group">
                        <!-- form-group 1 start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                            Box Title

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input  type="text" name="box_title" class="form-control" required>

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 1 end -->

                    <div class="form-group">
                        <!-- form-group 2 start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                            Box Description
                        

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <textarea  type="text" name="box_desc" class="form-control" rows="6" cols="18" required></textarea>

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 2 end -->



                    <div class="form-group">
                        <!-- form-group 4 start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                        </label><!-- control-label col-md-3 end -->
                         
                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                             <input class="btn btn-primary form-control" type="submit" name="submit" value="Insert Box Now">

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 4 end -->

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

  if(isset($_POST['submit'])){
      $box_title = $_POST['box_title'];
      $box_desc = $_POST['box_desc'];

      $insert_box = "insert into boxes_section (box_title,box_desc) values ('$box_title','$box_desc')";
      $run_box = mysqli_query($con, $insert_box);

      echo "<script>alert('New box has been inserted!')</script>";
      echo "<script>window.open('index.php?view_boxes','_self')</script>";

}

?>

<?php } ?> 