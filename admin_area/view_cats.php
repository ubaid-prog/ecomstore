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

            <li class="fa fa-dashboard"></li> Dashboard / View Category

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

                    <i class="fa fa-tags fa-fw"></i> View Categories

                </h3><!-- panel-title end -->

            </div><!-- panel-heading end -->

            <div class="panel-body">
                <!-- panel-body start -->

                <div class="table-responsive">
                    <!-- table-responsive start -->
                    <table class="table table-hover table-striped table-bordered">
                        <!-- table table-hover table-striped table-bordered start -->
                        <thead>
                            <!-- thead start -->
                            <tr>
                                <!-- tr start -->

                                <th> Category ID</th>
                                <th> Category Title</th>
                                <th> Category Top</th>
                                <th>Edit Category</th>
                                <th>Delete Category</th>

                            </tr><!-- tr end -->
                        </thead><!-- thead end -->

                        <tbody>
                            <!-- tbody start -->

                            <?php
                           
                           $i = 0;
                           $get_cats = "select * from categories";
                           $run_cats = mysqli_query($con,$get_cats);
                           while($row_cats=mysqli_fetch_array($run_cats)){
                            $cat_id  = $row_cats['cat_id'];
                            $cat_title  = $row_cats['cat_title'];
                            $cat_top = $row_cats['cat_top'];
                            $i++;
                      
                           ?>

                           

                            <tr>
                                <!-- tr start-->

                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo  $cat_title; ?> </td>
                                <td width="300"> <?php echo  $cat_top; ?> </td>
                                <td>
                                    <a href="index.php?edit_cat= <?php echo  $cat_id; ?> ">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?delete_cat= <?php echo  $cat_id; ?> ">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>

                            </tr><!-- tr end-->

                            <?php } ?>

                        </tbody><!-- tbody end -->

                    </table><!-- table table-hover table-striped table-bordered end -->
                </div><!-- table-responsive end -->

            </div><!-- panel-body end -->

        </div><!-- panel panel-default end -->
    </div><!-- col-lg-12 end -->
</div><!-- row 2 end -->


<?php } ?>