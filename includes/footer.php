<div id="footer"><!--#footer start-->
  <div class="container"><!--container start-->
    <div class="row"><!--row start-->
      <div class="col-sm-6 col-md-3"><!--col-sm-6-md-3 start-->
          <h4>Pages</h4>
        <ul><!--ul start-->
            <li> <a href="cart.php">Shopping Cart</a></li>
            <li> <a href="shop.php">Shop</a></li>
            <li> <a href="contact.php">Contact Us</a></li>
            <li> <a href="customer/my_account.php">My Account</a></li>
        </ul><!--ul End-->
        <hr>
        <h4>User Section</h4>
         <ul><!--ul start-->
           <?php

        if(!isset($_SESSION['customer_email'])){
          echo"<a href='checkout.php'>Login</a>";
        }else{
          echo"<a href='customer/my_account.php?my_orders'>My Account</a>";
        }
           ?>
           <li> <a href="customer_register.php">Register</a> </li>
           <li> <a href="terms.php">Terms & conditions</a> </li>

         </ul><!--ul End-->
        <hr class="hidden-md hidden-lg hidden-sm">
      </div><!--col-sm-6-md-3 End-->

       <div class="col-sm-6 col-md-3"><!--col-sm-6-md-3 start-->

      <h4>Top Product Categories</h4>
        <ul><!--ul start-->

            <?php

            $get_p_cats = "select * from product_categories";

            $run_p_cats = mysqli_query($con,$get_p_cats);

            while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                $p_cat_id = $row_p_cats['p_cat_id'];

                $p_cat_title = $row_p_cats['p_cat_title'];

                echo "

                <li>

                <a href='shop.php?p_cat=$p_cat_id'>

                $p_cat_title

                </a>

                </li>

                ";

            }

            ?>

        </ul><!--ul End-->
          <hr class="hidden-md hidden-lg">
       </div><!--col-sm-6-md-3 End-->
<div class="col-sm-6 col-md-3"><!--col-sm-6-md-3 start-->
              <h4>Find Us</h4>
               <p><!-- p Start-->
                 <strong>Ubaid Media Inc.</strong>
                 <br/>myshop@gmail.com
                 <br/>444445-5555518-1
                 <br/> <strong>My Shop</strong>
               </p><!-- p End-->
               <a href="contact.php">checkout Our conatct Page</a>
                <hr class="hidden-md hidden-lg">
             </div><!--com-sm-6-md-3 End-->
         <div class="col-sm-6 col-md-3">
            <h4>Get the News</h4>
              <p class="text-muted">
               Don't miss our latest updated products
                  </p>
          <form  action="get" method="post"><!-- form Start-->
            <div class="input-group"><!-- input-group Start-->
<input type="text" name="email" class="form-control">

<span class="input-group-btn"><!-- input-group-btn Start-->

   <input type="submit" value="subscribe" class="btn btn-default">

             </span><!-- input-group-btn End-->
            </div><!-- input-group End-->
           </form><!-- form End-->
               <hr>
         <h4>Get In touch</h4>
          <p class="social">

            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-google-plus"></a>
            <a href="#" class="fa fa-envelope"></a>

              </p>
             </div>
            </div><!--row End-->
           </div><!--container End-->
          </div><!--#footer End-->
<hr>

<div id="copyright"><!--#copyrigh start-->
  <div class="container"><!--container start-->
    <div class="col-md-6"><!--col-md-6 start-->
<p class="pull-left">&copy; 2019 MyShop All rights reserved</p>
    </div><!--col-md-6 End-->
    <div class="col-md-6"><!--col-md-6 start-->
<p class="pull-right">&copy; Designed by: <a href="#">UBAID</a></p>

    </div><!--col-md-6 End-->
  </div><!--container End-->
</div><!--#copyrigh End-->
