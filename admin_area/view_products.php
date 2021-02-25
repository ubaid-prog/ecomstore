<?php
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}else{

?>
<div class="row"><!-- row 1 start -->
  <div class="col-lg-12"><!-- col-lg-12 start -->
    <ol class="breadcrumb"><!-- breadcrumb start -->
      <li class="active"><!-- active start -->
       <i class="fa fa-dashboard"></i> Dashboard/ View Products
      </li><!-- active end -->

    </ol><!-- breadcrumb end -->

  </div><!-- col-lg-12 end -->

</div><!-- row 1 end -->

<div class="row"><!-- row 2 start -->
  <div class="col-lg-12"><!-- col-lg-12 start -->
    <div class="panel panel-default"><!-- panel panel-default start -->
      <div class="panel-heading"><!-- panel-heading start -->
       <h3 class="panel-title"><!-- panel-title start -->

      <i class="fa fa-tags"> View Products</i>

        </h3><!-- panel-title end -->

      </div><!-- panel-heading end -->

      <div class="panel-body"><!-- panel-body start -->
        <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover start -->

          <thead><!-- thead start -->
            <tr><!-- tr start -->
              <th>Product ID:</th>
              <th>Product Title:</th>
              <th>Product Images:</th>
              <th>Product Price:</th>
              <th>Product Sold:</th>
              <th>Product Keywords:</th>
              <th>Product Date:</th>
              <th>Product Delete:</th>
              <th>Product Edit:</th>
            </tr><!-- tr end -->
          </thead><!-- thead end -->

           <tbody><!-- tbody start -->
             <?php
             $i=0;
               $get_pro = "select * from products";
               $run_pro = mysqli_query($con,$get_pro);
               while($row_pro=mysqli_fetch_array($run_pro)){
                 $pro_id = $row_pro['product_id'];
                 $pro_title = $row_pro['product_title'];
                 $pro_img1 = $row_pro['product_img1'];
                 $pro_price = $row_pro['product_price'];
                 $pro_keywords = $row_pro['product_keywords'];
                 $pro_date = $row_pro['date'];
                 $i++;

              ?>

              <tr><!-- tr start -->
                <td><?php echo $i; ?></td>
                <td><?php echo $pro_title; ?></td>
                <td><img src="product_images/<?php echo $pro_img1; ?>" width="60" height="60"></td>
                <td><?php echo $pro_price; ?></td>
                <td>
                <?php
                 $get_sold = "select * from pending_orders where product_id='$pro_id'";
                 $run_sold = mysqli_query($con,$get_sold);
                 $count = mysqli_num_rows($run_sold);
                 echo $count;
                 ?>
               </td>
               <td><?php echo $pro_keywords; ?></td>
                <td><?php echo $pro_date; ?></td>
                <td>
                   <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                    <i class="fa fa-trash-o"></i> Delete
                   </a>
               </td>
                <td>

                  <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                   <i class="fa fa-pencil"></i> Edit
                  </a>

                </td>
              </tr><!-- tr end -->

            <?php } ?>

           </tbody><!-- tbody end -->
        </table><!-- table table-striped table-bordered table-hover end -->

      </div><!-- panel-body end -->

    </div><!-- panel panel-default end -->

  </div><!-- col-lg-12 end -->

</div><!-- row 2 end -->

<?php } ?>
