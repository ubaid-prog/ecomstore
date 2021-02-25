<?php
session_start();

$active='cart';

include("includes/db.php");
include("functions/functions.php");

?>

<?php

 if(isset($_GET['pro_id'])){

   $product_id = $_GET['pro_id'];

   $get_product = "select * from products where product_id='$product_id'";

   $run_product = mysqli_query($con,$get_product);

   $row_product = mysqli_fetch_array($run_product);

   $p_cat_id = $row_product['p_cat_id'];
   $pro_title = $row_product['product_title'];
   $pro_price = $row_product['product_price'];
   $pro_desc = $row_product['product_desc'];
   $pro_img1 = $row_product['product_img1'];
   $pro_img2 = $row_product['product_img2'];
   $pro_img3 = $row_product['product_img3'];
   $get_p_cat = "select * from product_categories where p_cat_id ='$p_cat_id'";
   $run_p_cat = mysqli_query($con,$get_p_cat);
   $row_p_cat = mysqli_fetch_array($run_p_cat);
   $p_cat_title = $row_p_cat['p_cat_title'];


 }

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>M-Dev store</title>
        <link rel="stylesheet" href="styles/bootstrap-337.min.css">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/style.css">
    </head>

    <body>

        <div id="top">
            <!-- Top Start-->

            <div class="container">
                <!-- container Start-->

                <div class="col-md-6 offer">
                    <!--col-md-6 offer start-->

                    <a href="#" class="btn btn-success btn-sm">

                    <?php

               if(!isset($_SESSION['customer_email'])){
                 echo "Welcome: Guest";
               }else{
                 echo "Welcome: ".$_SESSION['customer_email']. "";
               }
                     ?>


                    </a>
                    <a href="checkout.php"><?php items (); ?> Items In Your Shopping Cart | Total Price Is: <?php total_price(); ?></a>

                </div>
                <!--col-md-6 offer End-->

                <div class="col-md-6">
                    <!--col-md-6 start-->

                    <ul class="menu">
                        <!--menu start-->
                        <li>
                            <a href="customer_register.php">Register</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Go To Cart</a>
                        </li>
                        <li>
                            <a href="checkout.php">

                         <?php

                         if(!isset($_SESSION['customer_email'])){
                           echo "<a href='checkout.php'> Login </a>";
                         }else{
                           echo " <a href='logout.php'> Logout </a> ";
                         }

                          ?>

                            </a>
                        </li>
                    </ul>
                    <!--menu End-->

                </div>
                <!--col-md-6 End-->

            </div><!-- container End-->

        </div><!-- Top End-->

        <div id="navbar" class="navbar navbar-default">
            <!-- navbar navbar-default start-->

            <div class="container">
                <!--container start-->

                <div class="navbar-header">
                    <!--navbar-header start-->

                    <a href="index.php" class="navbar-brand home">
                        <!--navbar-brand home start-->

                        <img src="images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                        <img src="images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">

                    </a>
                    <!--navbar-brand home End-->

                    <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>

                    <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle serach</span>
                        <i class="fa fa-search"></i>
                    </button>

                </div>
                <!--navbar-header End-->

                <div class="navbar-collapse collapse" id="navigation">
                    <!--navbar-collapse collapse start-->

                    <div class="padding-nav">
                        <!--padding-nav start-->

                        <ul class="nav navbar-nav left">
                            <!--nav navbar-nav left start-->
                            <li class="<?php if($active=='Home') echo"active"; ?>">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="<?php if($active=='Shop') echo"active"; ?>">

                                <a href="shop.php">Shop</a>
                            </li>
                            <li class="<?php if($active=='Account') echo"active"; ?>">
                               <?php

                            if(!isset($_SESSION['customer_email'])){
                              echo"<a href='checkout.php'>My Account</a>";
                            }else{
                              echo"<a href='customer/my_account.php?my_orders'>My Account</a>";

                            }
                               ?>
                            </li>
                            <li class="<?php if($active=='Cart') echo"active"; ?>">
                            <a href="cart.php">Shopping Cart</a>
                            </li>
                            <li class="<?php if($active=='Contact') echo"active"; ?>">
                                <a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                        <!--nav navbar-nav left End-->

                    </div>
                    <!--padding-nav collapse End-->

                    <a href="cart.php" class="btn navbar-btn btn-primary right">
                        <!--btn navbar-btn btn-primary right Start-->
                        <i class="fa fa-shopping-cart"></i>
                        <span><?php items (); ?> Items In Your Shopping Cart</span>
                    </a>
                    <!--btn navbar-btn btn-primary right End-->

                    <div class="navbar-collapse collapse right">
                        <!--navbar-collapse collapse right Start-->

                        <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                            <!--btn btn-primary navbar-btn Start-->
                            <span class="sr-only">Toggle Search</span>
                            <i class="fa fa-search"></i>
                        </button>
                        <!--btn btn-primary navbar-btn End-->

                    </div>
                    <!--navbar-collapse collapse right End-->

                    <div class="collapse clearfix" id="search">
                        <!--collapse clearfix Start-->

                        <form method="post" action="results.php" class="navbar-form">
                            <!--navbar-form Start-->

                            <div class="input-group">
                                <!--input-group Start-->

                                <input type="text" class="form-control" placeholder="search" name="search" required>
                                <span class="input-group-btn">
                                    <!--input-group-btn start-->

                                    <button type="submit" name="submit-search" value="search" class="btn btn-primary">
                                        <!--btn btn-primary Start-->
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <!--btn btn-primary End-->
      
                                </span>
                                <!--input-group-btn End-->
                                
                            </div>
                            <!--input-group End-->

                        </form>
                        <!--navbar-form End-->
                        <?php 
          $sql= "select * from products";
          $result = mysqli_query($con,$sql);
          $queryResults = mysqli_num_rows($result);

          if($queryResults > 0){
              while ($row = mysqli_fetch_assoc($result)) {
                 
              }

          }
          ?>
                    </div>
                    <!--collapse clearfix End-->

                </div>
                <!--navbar-collapse collapse End-->

            </div>
            <!--container End-->

        </div> <!-- navbar navbar-default End-->


        <div id="content"><!--#content start-->
          <div class="container"> <!--container start-->
            <div class="col-md-12"><!--col-md-12 start-->

             <ul class="breadcrumb"><!--breadcrumb start-->
               <li> <a href="index.php">Home</a>
               </li>
               <li>
                 Shop
               </li>

               <li>

                <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>

               </li>
                      <?php echo $pro_title; ?>
               <li>



               </li>
             </ul><!--breadcrumb End-->
           </div><!--col-md-12 End-->

            <div class="col-md-3"><!--col-md-3 start-->

              <?php
              include("includes/sidebar.php")
               ?>

            </div><!--col-md-3 End-->

           <div class="col-md-9"><!--col-md-9 start-->
             <div id="productMain" class="row"> <!--productMain start-->
               <div class="col-sm-6"><!--col-md-6 start-->
                 <div id="mainImage"><!--mainImage start-->
                   <div id="myCarousel" class="carousel slide" data-ride="carousel"><!--myCarousel start -->
                     <ol class="carousel-indicators"><!--carousel-indicators start-->
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol><!--carousel-indicators End-->

                       <div class="carousel-inner">
                         <div class="item active">
                           <center> <img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1 ?>" alt="Product 1a"> </center>
                         </div>
                         <div class="item">
                           <center> <img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2 ?>" alt="Product 1b"> </center>
                         </div>
                         <div class="item">
                           <center> <img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3 ?>" alt="Product 1c"> </center>
                         </div>
                       </div>

                        <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!--left carousel-control start-->
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a><!--left carousel-control start-->

                        <a href="#myCarousel" class="right carousel-control" data-slide="next"><!--right carousel-control start-->
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a><!--right carousel-control End-->

                   </div><!--myCarousel End-->
                 </div><!--mainImage End-->
               </div><!--col-md-6 End-->

               <div class="col-sm-6"><!--col-sm-6 start-->
                 <div class="box"><!--box start-->
                   <h1 class="text-center"><?php echo $pro_title; ?></h1>

                   <?php add_cart(); ?>

                     <form class="form-horizontal" action="details.php?add_cart=<?php echo $product_id; ?>" method="post"><!--form-horizontal start-->
                        <div class="form-group"><!--form-group start-->
                          <label for="" class="col-md-5 control-label">Products Quantity</label>

                          <div class="col-md-7"> <!--col-md-7 start-->
                            <select name="product_qty" id="" class="form-control" required oninput="setCustomValidity('')"
                             oninvalid="setCustomValidity('Must pick a size for the product')"><!--select start-->
                            <option disable selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select><!--select End-->

                        </div><!--col-md-7 End-->

                       </div><!--form-group End-->

                        <div class="form-group"><!--form-group start-->
                          <label class="col-md-5 control-label">Products Size</label>

                           <div class="col-md-7"><!--col-md-7 start-->
                             <select name="product_size" class="form-control"><!--form-group start-->

                               <option>Select a size</option>
                               <option>Small</option>
                               <option>Medium</option>
                               <option>Large</option>

                             </select><!--form-group End-->
                           </div><!--col-md-7 End-->

                        </div><!--form-group End-->

                      <p class="price">£ <?php echo $pro_price; ?></p>
                      <p class="text-center button"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>

                     </form><!--form-horizontal End-->

                 </div><!--box End-->

                <div class="row" id="thumbs"><!--row start-->

                  <div class="col-xs-4"><!--col-xs-4 start-->
                    <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"><!--thumb start-->
                      <img src="admin_area/product_images/<?php echo $pro_img1 ?>" alt="Product 1a" class="img-responsive">
                    </a><!--thumb End-->
                  </div><!--col-xs-4 End-->
                  <div class="col-xs-4"><!--col-xs-4 start-->
                    <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb"><!--thumb start-->
                      <img src="admin_area/product_images/<?php echo $pro_img2 ?>" alt="Product 1b" class="img-responsive">
                    </a><!--thumb End-->
                  </div><!--col-xs-4 End-->
                  <div class="col-xs-4"><!--col-xs-4 start-->
                    <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb"><!--thumb start-->
                      <img src="admin_area/product_images/<?php echo $pro_img3 ?>" alt="Product 1c" class="img-responsive">
                    </a><!--thumb End-->
                  </div><!--col-xs-4 End-->

                </div><!--row End-->

               </div><!--col-sm-6 End-->

             </div><!--productMain start End-->

                  <div class="box" id="details"><!--box start-->

                      <h4>Product Details</h4>

                <p>
                    <?php echo $pro_desc; ?>
                </p>

                <h4>Size</h4>

                <ul>
                  <li>Small</li>
                  <li>Medium</li>
                  <li>Large</li>
                </ul>

                <hr>

                  </div><!--box End-->


                   <div id="row same-height-row"><!--row same-height-row start-->
                     <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 start-->
                       <div class="box same-height headline"><!--box same-height headline start-->
                        <h3 class="text-center">Products that you might like</h3>
                      </div><!--box same-height headline End-->
                      </div><!--col-md-3 col-sm-6 End-->

                      <?php

                        $get_products = "select * from products order by rand() LIMIT 0,3";

                        $run_products = mysqli_query($con,$get_products);

                        while($row_products=mysqli_fetch_array($run_products)){

                           $pro_id = $row_products['product_id'];
                           $pro_title = $row_products['product_title'];
                           $pro_img1 = $row_products['product_img1'];
                           $pro_price = $row_products['product_price'];

                           echo "

                           <div class='col-md-3 col-sm-6 center-responsive'>

                           <div class='product same-height'>
                           <a href='details.php?pro_id=$pro_id'>

                            <img class='img-responsive' src='admin_area/product_images/$pro_img1' />

                           </a>

                            <div class='text'>

                           <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>

                           <p class='price'>
                              £ $pro_price
                           </p>

                            </div>

                           </div>
                           </div>

                           ";




                        }

                       ?>

                    </div><!--row same-height-row End-->
                 </div><!--col-md-9 End-->
                </div><!--container End-->
               </div><!--content End-->

        <?php
        include("includes/footer.php")
         ?>

        <script src="js/jquery-331.min.js"> </script>
        <script src="js/bootstrap-337.min.js"> </script>
      </body>
      </html>
