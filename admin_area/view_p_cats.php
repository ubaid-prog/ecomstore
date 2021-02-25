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

            <li class="fa fa-dashboard"></li> Dashboard / View Product Category

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

                    <i class="fa fa-tags fa-fw"></i> View Product Categories

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

                                <th>Product Category ID</th>
                                <th>Product Category Title</th>
                                <th>Product Category Top</th>
                                <th>Edit Product Category</th>
                                <th>Delete Product Category</th>

                            </tr><!-- tr end -->
                        </thead><!-- thead end -->

                        <tbody>
                            <!-- tbody start -->

                            <?php
                           
                           $i = 0;
                           $get_p_cats = "select * from product_categories";
                           $run_p_cats = mysqli_query($con,$get_p_cats);
                           while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            $p_cat_id  = $row_p_cats['p_cat_id'];
                            $p_cat_title  = $row_p_cats['p_cat_title'];
                            $p_cat_top  = $row_p_cats['p_cat_top'];
                            $i++;

                     
                      
                           ?>

                            <tr>
                                <!-- tr start-->

                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo  $p_cat_title; ?> </td>
                                <td width="300"> <?php echo  $p_cat_top; ?> </td>
                                <td>
                                    <a href="index.php?edit_p_cat= <?php echo  $p_cat_id; ?> ">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?delete_p_cat= <?php echo  $p_cat_id; ?> ">
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