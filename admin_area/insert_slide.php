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

            <li class="fa fa-dashboard"></li> Dashboard / Insert Slide

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

                    <i class="fa fa-money fa-fw"></i> Insert Slide

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

                            Slide Name

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input  type="text" name="slide_name" class="form-control" required>

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 1 end -->

                    <div class="form-group">
                        <!-- form-group 2 start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                            Slide Url
                        

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input  type="text" name="slide_url" class="form-control" required>

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 2 end -->

                    <div class="form-group">
                        <!-- form-group 3 start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                            Slide Image

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                            <input  type="file" name="slide_image" class="form-control" required>

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 3 end -->


                    <div class="form-group">
                        <!-- form-group 4 start -->

                        <label for="" class="control-label col-md-3">
                            <!-- control-label col-md-3 start -->

                        </label><!-- control-label col-md-3 end -->

                        <div class="col-md-6">
                            <!-- col-md-6 start -->

                             <input class="btn btn-primary form-control" type="submit" name="submit" value="Insert slide now">

                        </div> <!-- col-md-6 end -->
                    </div><!-- form-group 4 end -->

                </form><!-- form-horizontal end -->
            </div><!-- panel-body end -->

        </div><!-- panel panel-default end -->
    </div><!-- col-lg-12 end -->
</div><!-- row 2 end -->

<?php 

  if(isset($_POST['submit'])){
      $slide_name = $_POST['slide_name'];
      $slide_url = $_POST['slide_url'];
      $slide_image = $_FILES['slide_image']['name'];
      $temp_name = $_FILES['slide_image']['tmp_name'];
      $view_slides = "select * from slider";
      $view_run_slides = mysqli_query($con,$view_slides);
      $count = mysqli_num_rows($view_run_slides);
      if($count<4){
          move_uploaded_file($temp_name,"slides_images/$slide_image");
          $insert_slide = "insert into slider (slide_name,slide_url,slide_image) values (' $slide_name','$slide_url','$slide_image')";
          $run_slide = mysqli_query($con,$insert_slide);
          echo "<script>alert('Your new slide image has been inserted!')</script>";
          echo "<script>window.open('index.php?view_slides','_self')</script>";

      }else{
         
        echo" <script>alert('Maximum slides limit reached!')</script>";
       
      }
     

}

?>

<?php } ?>