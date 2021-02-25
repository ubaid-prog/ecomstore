<?php

$active='Cart';
include("includes/header.php");

?>

<div id="content">
  <!--#content start-->
  <div class="container">
    <!--container start-->
    <div class="col-md-12">
      <!--col-md-12 start-->

      <ul class="breadcrumb">
        <!--breadcrumb start-->
        <li> <a href="index.php">Home</a>
        </li>
        <li>
          Cart
        </li>
      </ul>
      <!--breadcrumb End-->
    </div>
    <!--col-md-12 End-->

    <div id="cart" class="col-md-9">
      <!--col-md-9 start-->

      <div class="box">
        <!--box start-->

        <form action="cart.php" method="post" enctype="multipart/form-data">
          <!--form start-->

          <h1>Shopping Cart</h1>

          <?php

                        $ip_add = getRealIpUser();
                        $select_cart = "select * from cart where ip_add='$ip_add'";
                        $run_cart = mysqli_query($con,$select_cart);
                        $count = mysqli_num_rows($run_cart);


                       ?>


          <p class="text-muted">You currently have <?php echo $count; ?> item(s) in your cart</p>

          <div class="table-responsive">
            <!--table-responsive start-->

            <table class="table">
              <!--table start-->

              <thead>
                <!--thead start-->
                <tr>
                  <!--tr start-->
                  <th colspan="2">Product</th>
                  <th>Quantity</th>
                  <th>Unit Price</th>
                  <th>Size</th>
                  <th colspan="1">Delete</th>
                  <th colspan="2">Subtotal</th>
                </tr>
                <!--tr End-->
              </thead>
              <!--thead End-->
              <tbody>
                <!--tbody start-->

                <?php

                          $total = 0;
                          while($row_cart = mysqli_fetch_array($run_cart)) {
                        $pro_id = $row_cart['p_id'];
                            $pro_size = $row_cart['size'];
                            $pro_qty = $row_cart['qty'];
                             $get_products = "select * from products where product_id='$pro_id'";
                             $run_products = mysqli_query($con,$get_products);
                             while($row_products = mysqli_fetch_array($run_products)){
                                $product_title = $row_products['product_title'];
                                $product_img1 = $row_products['product_img1'];
                                $only_price = $row_products['product_price'];
                                $sub_total = $row_products['product_price']*$pro_qty;
                                $total += $sub_total;

                             ?>


                <tr>
                  <!--tr start-->
                  <td>
                    <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>"
                      alt="Product 1a">
                  </td>
                  <td>
                    <a href="details.php?pro_id=<?php echo $pro_id; ?>"> <?php echo $product_title; ?> </a>
                  </td>
                  <td><?php echo $pro_qty; ?> </td>
                  <td><?php echo $only_price; ?></td>
                  <td><?php echo $pro_size; ?></td>
                  <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></td>
                  <td>£ <?php echo $sub_total; ?></td>
                </tr>
                <!--tr End-->

                <?php

                           }}





                           ?>


              </tbody>
              <!--tbody End-->

              <tfoot>
                <!--tfoot start-->

                <tr>
                  <!--tr start-->

                  <th colspan="5">Total</th>
                  <th colspan="2">£ <?php echo $total; ?></th>

                </tr>
                <!--tr End-->

              </tfoot>
              <!--tfoot End-->

            </table>
            <!--table End-->
          </div>
          <!--table-responsive End-->

          <div class="box-footer">
            <!--box-footer start-->

            <div class="pull-left">
              <!--pull-left start-->

              <a href="index.php" class="btn btn-default">
                <!--btn btn-default start-->

                <i class="fa fa-chevron-left"></i> Continue Shopping

              </a>
              <!--btn btn-default End-->

            </div>
            <!--pull-left End-->
            <div class="pull-right">
              <!--pull-right start-->

              <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                <!--btn btn-default start-->

                <i class="fa fa-trash"></i> Remove selected Items

              </button>
              <!--btn btn-default End-->

              <a href="checkout.php" class="btn btn-primary">

                Proceed to Checkout <i fa fa-chevron-right></i>

              </a>

            </div>
            <!--pull-right End-->

          </div>
          <!--box-footer End-->

        </form>
        <!--form End-->

      </div>
      <!--box End-->

      <?php

             function update_cart(){
               global $con;
               if(isset($_POST['update'])){
                 foreach($_POST['remove']as $remove_id){
                   $delete_product = "delete from cart where p_id='$remove_id'";
                   $run_delete = mysqli_query($con,$delete_product);
                   if($run_delete){
                     echo "<script>window.open('cart.php','_self')</script>";
                    }

                   }

                 }

               }

               echo @$up_cart = update_cart();

            ?>


      <div id="row same-height-row">
        <!--row same-height-row start-->
        <div class="col-md-3 col-sm-6">
          <!--col-md-3 col-sm-6 start-->
          <div class="box same-height headline">
            <!--box same-height headline start-->
            <h3 class="text-center">Products that you might like</h3>
          </div>
          <!--box same-height headline End-->
        </div>
        <!--col-md-3 col-sm-6 End-->

        <?php

               $get_products = "select * from products order by rand() LIMIT 0,3";
               $run_products = mysqli_query($con,$get_products);
               while($row_products=mysqli_fetch_array($run_products)){
                 $pro_id = $row_products['product_id'];
                 $pro_title = $row_products['product_title'];
                 $pro_price = $row_products['product_price'];
                 $pro_img1 = $row_products['product_img1'];
                 echo "

                   <div class='col-md-3 col-sm-6 center-responsive'><!--col-md-3 col-sm-6 center-responsive start-->
                      <div class='product same-height'><!--product same-height start-->
                        <a href='details.php?pro_id=$pro_id'>
                          <img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 6'>
                         </a>

                        <div class='text'><!--text start-->
                            <h3> <a href='details.php?pro_id=<?php echo $pro_id ?>'> $pro_title </a></h3>

        <p class='price'>£ $pro_price</p>

      </div>
      <!--text End-->

    </div>
    <!--product same-height End-->
  </div>
  <!--col-md-3 col-sm-6 center-responsive End-->

  ";

  }

  ?>


</div>
<!--row same-height-row End-->

</div>
<!--col-md-9 End-->

<div class="col-md-3">
  <!--col-md-3 start-->

  <div id="order-summary" class="box">
    <!--box start-->

    <div class="box-header">
      <!--box-header start-->

      <h3>Order Summary</h3>

    </div>
    <!--box-header End-->

    <p class="text-muted">
      <!--text-muted start-->

      Shipping and additional costs are calculated based on the value you have entered

    </p>
    <!--text-muted End-->

    <div class="table-responsive">
      <!--table-responsive start-->

      <table class="table">
        <!--table start-->

        <tbody>
          <!--tbody start-->

          <tr>
            <!--tr start-->

            <td>Order All Sub-total</td>
            <th>£ <?php echo $total; ?></th>

          </tr>
          <!--tr End-->

          <tr>
            <!--tr start-->

            <td>Shipping and Handling</td>
            <td>£0</td>

          </tr>
          <!--tr End-->
          <tr>
            <!--tr start-->

            <td>Tax</td>
            <td>£0</td>

          </tr>
          <!--tr End-->
          <tr class="total">
            <!--tr start-->

            <td>Total</td>
            <td>£<?php echo $total;?></td>

          </tr>
          <!--tr End-->

        </tbody>
        <!--tbody End-->

      </table>
      <!--table End-->

    </div>
    <!--table-responsive End-->

  </div>
  <!--box End-->

</div>
<!--col-md-3 End-->

</div>
<!--container End-->
</div>
<!--content End-->

<?php
       include("includes/footer.php")
        ?>

<script src="js/jquery-331.min.js"> </script>
<script src="js/bootstrap-337.min.js"> </script>
</body>

</html>