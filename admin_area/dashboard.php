<?php
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}else{


?>
<div class="row"><!-- row 1 begin -->
  <div class="col-lg-12"><!-- col-lg-12 begin -->
    <h1 class="page-header"> Dashboard </h1>
    <ol class="breadcrumb"><!-- breadcrumb begin -->
      <li class="active"><!-- active begin -->
        <i class="fa fa-dashboard"></i> Dashboard
      </li><!-- active end -->

    </ol><!-- breadcrumb end -->
  </div><!-- col-lg-12 end -->
</div><!-- row 1 end -->

<div class="row"><!-- row 2 begin -->
  <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
    <div class="panel panel-primary"><!--panel panel-primary begin -->

     <div class="panel-heading"><!--panel-heading begin -->
       <div class="row"><!--row 3 begin -->
         <div class="col-xs-3"><!--col-xs-3 begin -->

           <i class="fa fa-tasks fa-5x"></i>

         </div><!--col-xs-3 end -->

         <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
           <div class="huge"> <?php echo $count_products; ?> </div>

             <div> Products </div>

         </div><!-- col-xs-9 text-right end -->

       </div><!--row 3 end -->

     </div><!--panel-heading end -->
     <a href="index.php?view_products"><!--a href begin -->
       <div class="panel-footer"><!--panel-footer begin -->
         <span class="pull-left"> View Details </span>
         <span class="pull-right"> <!--pull-right begin -->
           <i class="fa fa-arrow-circle-right"></i>
         </span><!--pull-right end -->

         <div class="clearfix"></div>

       </div><!--panel-footer end -->
     </a><!--a href end -->

    </div><!--panel panel-primary end -->

  </div><!-- col-lg-3 col-md-6 end -->

  <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
    <div class="panel panel-green"><!--panel panel-green begin -->

     <div class="panel-heading"><!--panel-heading begin -->
       <div class="row"><!--row 3 begin -->
         <div class="col-xs-3"><!--col-xs-3 begin -->

           <i class="fa fa-users fa-5x"></i>

         </div><!--col-xs-3 end -->

         <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
           <div class="huge"> <?php echo $count_customers; ?> </div>

             <div> Customers </div>

         </div><!-- col-xs-9 text-right end -->

       </div><!--row 3 end -->

     </div><!--panel-heading end -->
     <a href="index.php?view_customers"><!--a href begin -->
       <div class="panel-footer"><!--panel-footer begin -->
         <span class="pull-left"> View Details </span>
         <span class="pull-right"> <!--pull-right begin -->
           <i class="fa fa-arrow-circle-right"></i>
         </span><!--pull-right end -->

         <div class="clearfix"></div>

       </div><!--panel-footer end -->
     </a><!--a href end -->

   </div><!--panel panel-green end -->

  </div><!-- col-lg-3 col-md-6 end -->
  <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
    <div class="panel panel-orange"><!--panel panel-orange begin -->

     <div class="panel-heading"><!--panel-heading begin -->
       <div class="row"><!--row 3 begin -->
         <div class="col-xs-3"><!--col-xs-3 begin -->

           <i class="fa fa-tags fa-5x"></i>

         </div><!--col-xs-3 end -->

         <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
           <div class="huge"> <?php echo $count_p_categories; ?> </div>

             <div> Product Categories </div>

         </div><!-- col-xs-9 text-right end -->

       </div><!--row 3 end -->

     </div><!--panel-heading end -->
     <a href="index.php?view_p_cats"><!--a href begin -->
       <div class="panel-footer"><!--panel-footer begin -->
         <span class="pull-left"> View Details </span>
         <span class="pull-right"> <!--pull-right begin -->
           <i class="fa fa-arrow-circle-right"></i>
         </span><!--pull-right end -->

         <div class="clearfix"></div>

       </div><!--panel-footer end -->
     </a><!--a href end -->

   </div><!--panel panel-orange end -->

  </div><!-- col-lg-3 col-md-6 end -->

  <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
    <div class="panel panel-red"><!--panel panel-red begin -->

     <div class="panel-heading"><!--panel-heading begin -->
       <div class="row"><!--row 3 begin -->
         <div class="col-xs-3"><!--col-xs-3 begin -->

           <i class="fa fa-shopping-cart fa-5x"></i>

         </div><!--col-xs-3 end -->

         <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
           <div class="huge"> <?php echo $count_pending_orders; ?> </div>

             <div> Orders </div>

         </div><!-- col-xs-9 text-right end -->

       </div><!--row 3 end -->

     </div><!--panel-heading end -->
     <a href="index.php?view_orders"><!--a href begin -->
       <div class="panel-footer"><!--panel-footer begin -->
         <span class="pull-left"> View Details </span>
         <span class="pull-right"> <!--pull-right begin -->
           <i class="fa fa-arrow-circle-right"></i>
         </span><!--pull-right end -->

         <div class="clearfix"></div>

       </div><!--panel-footer end -->
     </a><!--a href end -->

   </div><!--panel panel-red end -->

  </div><!-- col-lg-3 col-md-6 end -->


</div><!-- row 2 end -->

<div class="row"><!-- row 3 begin -->
  <div class="col-lg-8"><!-- col-lg-8 begin -->
    <div class="panel panel-primary"><!-- panel-primary begin -->
      <div class="panel-heading"><!-- panel-heading begin -->
        <h3 class="panel-title"><!-- panel-title begin -->
          <i class="fa fa-money fa-fw"></i> New Orders
        </h3><!-- panel-title end -->
     </div><!-- panel-heading end -->

     <div class="panel-body"><!-- panel-body begin -->
      <div class="table-responsive"><!-- table-responsive begin -->
        <table class="table table-hover table-striped table-bordered"><!-- table-hover table-striped table-bordered begin -->
         <thead><!-- thead begin -->
           <tr><!-- tr begin -->
           <th>Order no:</th>
           <th>Customer Email:</th>
           <th>Invoice no:</th>
           <th>Product ID:</th>
           <th>Product Qty:</th>
           <th>Product Size:</th>
           <th>Status:</th>
         </tr><!-- tr end -->
         </thead><!-- thead end -->

         <tbody><!-- tbody begin -->

           <?php
             $i=0;
             $get_order = "select * from pending_orders order by 1 DESC LIMIT 0,5";
             $run_order = mysqli_query($con,$get_order);
             while($row_order=mysqli_fetch_array($run_order)){
               $order_id=$row_order['order_id'];
               $c_id=$row_order['customer_id'];
               $invoice_no=$row_order['invoice_no'];
               $product_id=$row_order['product_id'];
               $qty=$row_order['qty'];
               $size=$row_order['size'];
               $order_status = $row_order['order_status'];
               $i++;


            ?>

           <tr>
             <td> <?php echo $order_id; ?> </td>
             <td>

               <?php
               $get_customer = "select * from customers where customer_id='$c_id'";
               $run_customer = mysqli_query($con,$get_customer);
               $row_customer = mysqli_fetch_array($run_customer);
               $customer_email = $row_customer['customer_email'];
               echo $customer_email;

               ?>
              </td>
             <td> <?php echo $invoice_no; ?> </td>
             <td> <?php echo $product_id; ?> </td>
             <td>  <?php echo $qty; ?> </td>
             <td> <?php echo $size; ?> </td>
             <td>

            <?php
             if($order_status=='pending'){
               echo $order_status='Pending';
             }else{
               echo $order_status='Complete';
             }

             ?>

              </td>
           </tr>
         <?php } ?>
         </tbody><!-- tbody end -->
        </table><!-- table-hover table-striped table-bordered end -->
      </div><!-- table-responsive end -->

      <div class="text-right"><!-- text-right start -->
        <a href="index.php?view_orders"><!-- a href start -->

          View All Orders <i class="fa fa-arrow-circle-right"></i>

        </a><!-- a href end -->

      </div><!-- text-right end -->

    </div><!-- panel-body end -->
   </div><!-- panel-primary end -->
 </div><!-- col-lg-8 end -->

 <div class="col-md-4"><!--col-md-4 begin -->
<div class="panel"><!-- panel begin -->
  <div class="panel-body"><!--panel-body begin -->
    <div class="mb-md thumb-info"><!--mb-md thumb-info begin -->
      <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" class="rounded img-responsive">
      <div class="thumb-info-title"><!-- thumb-info-title begin -->
        <span class="thumb-info-inner"> <?php echo $admin_name; ?> </span>
          <span class="thumb-info-type"> <?php echo $admin_job; ?></span>
      </div><!-- thumb-info-title end -->
    </div><!--mb-md thumb-info end -->

     <div class="mb-db"><!-- mb-db begin -->
       <div class="widget-content-expanded"><!-- widget-content-expanded begin -->
         <i class="fa fa-user"></i> <span> Email: </span> <?php echo $admin_email; ?> <br>
         <i class="fa fa-flag"></i> <span> Country: </span> <?php echo $admin_country; ?> <br>
         <i class="fa fa-envelope"></i> <span> Conatct No: </span> <?php echo $admin_contact; ?> <br>

       </div><!-- widget-content-expanded end -->

       <hr class="dotted short">

       <h5 class="text-muted"> About Me </h5>

       <p>
      <?php echo $admin_about; ?>
       </p>

     </div><!-- mb-db end -->

  </div><!--panel-body end -->
</div><!-- panel end -->
</div><!--col-md-4 end -->

</div><!-- row 3 end -->
<?php } ?>
