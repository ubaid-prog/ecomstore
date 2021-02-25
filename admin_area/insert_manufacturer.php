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

            <li class="fa fa-dashboard"></li> Dashboard / Insert Manufacturer

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

                    <i class="fa fa-money fa-fw"></i> Insert Manufacturer

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

                            Manufacturer Name

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input  type="text" name="manufacturer_name" class="form-control">

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 1 end -->

                    <div class="form-group">
                        <!-- form-group 2 start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                           Choose as top manufacturer
                        

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input  type="radio" name="manufacturer_top" value="yes">

                            <label>Yes</label>

                            <input  type="radio" name="manufacturer_top" value="no">

                             <label>No</label>

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 2 end -->

                    <div class="form-group">
                        <!-- form-group 3 start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                            Manufacturer Image

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input  type="file" name="manufacturer_image" class="form-control">

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 3 end -->


                    <div class="form-group">
                        <!-- form-group 4 start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                             <input class="btn btn-primary form-control" type="submit" name="submit" value="Submit manufacturer">

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 4 end -->

                </form><!-- form-horizontal end -->
            </div><!-- panel-body end -->

        </div><!-- panel panel-default end -->
    </div><!-- col-lg-12 end -->
</div><!-- row 2 end -->

<?php 

  if(isset($_POST['submit'])){
      $manufacturer_name = $_POST['manufacturer_name'];
      $manufacturer_top = $_POST['manufacturer_top'];
      $manufacturer_image = $_FILES['manufacturer_image']['name'];
      $temp_name = $_FILES['manufacturer_image']['tmp_name'];
      move_uploaded_file($temp_name,"other_images/$manufacturer_image");
      $insert_manufacturer = "insert into manufacturers (manufacturer_title,manufacturer_top,manufacturer_image) 
      values (' $manufacturer_name','$manufacturer_top','$manufacturer_image')";
      $run_manufacturer = mysqli_query($con,$insert_manufacturer);
      echo "<script>alert('Your new Manufacturer has been inserted!')</script>";
      echo "<script>window.open('index.php?view_manufacturers','_self')</script>";
     
}

?>

<?php } ?>