<?php
session_start();
if(!isset($_SESSION['customer_email'])){
  echo "<script>window.open('../checkout.php','_self')</script>";
}else{
include("includes/db.php");
include("functions/functions.php");
if(isset($_GET['order_id'])){
  $order_id = $_GET['order_id'];
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>M-Dev store</title>
        <link rel="stylesheet" href="styles/bootstrap-337.min.css">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>

        <div id="top"> <!-- Top Start-->

            <div class="container"><!-- container Start-->

                <div class="col-md-6 offer"><!--col-md-6 offer start-->

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

                </div><!--col-md-6 offer End-->

                <div class="col-md-6"><!--col-md-6 start-->

                    <ul class="menu"><!--menu start-->
                        <li>
                            <a href="../customer_register.php">Register</a>
                        </li>
                        <li>
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">Go To Cart</a>
                        </li>
                        <li>
                            <a href="../checkout.php">

                              <?php

                              if(!isset($_SESSION['customer_email'])){
                                echo "<a href='checkout.php'> Login </a>";
                              }else{
                                echo " <a href='logout.php'> Logout </a> ";
                              }

                               ?>

                            </a>
                        </li>
                    </ul><!--menu End-->

                </div><!--col-md-6 End-->

            </div><!-- container End-->

        </div><!-- Top End-->

        <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default start-->

            <div class="container"><!--container start-->

                <div class="navbar-header"><!--navbar-header start-->

                    <a href="../index.php" class="navbar-brand home"><!--navbar-brand home start-->

                        <img src="images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                        <img src="images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">

                    </a><!--navbar-brand home End-->

                    <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>

                    <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle serach</span>
                        <i class="fa fa-search"></i>
                    </button>

                </div> <!--navbar-header End-->

                <div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse start-->

                    <div class="padding-nav"><!--padding-nav start-->

                        <ul class="nav navbar-nav left"><!--nav navbar-nav left start-->
                            <li>
                                <a href="../index.php">Home</a>
                            </li>
                            <li>
                                <a href="../shop.php">Shop</a>
                            </li>
                            <li class="active">
                                <a href="my_account.php">My Account</a>
                            </li>
                            <li> <a href="../cart.php">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="../contact.php">Contact Us</a>
                            </li>
                        </ul><!--nav navbar-nav left End-->

                    </div><!--padding-nav collapse End-->

                    <a href="../cart.php" class="btn navbar-btn btn-primary right"><!--btn navbar-btn btn-primary right Start-->
                        <i class="fa fa-shopping-cart"></i>
                        <span><?php items (); ?> Items In Your Shopping Cart</span>
                    </a><!--btn navbar-btn btn-primary right End-->

                    <div class="navbar-collapse collapse right"><!--navbar-collapse collapse right Start-->

                        <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"> <!--btn btn-primary navbar-btn Start-->
                            <span class="sr-only">Toggle Search</span>
                            <i class="fa fa-search"></i>
                        </button><!--btn btn-primary navbar-btn End-->

                    </div><!--navbar-collapse collapse right End-->

                    <div class="collapse clearfix" id="search"><!--collapse clearfix Start-->

                        <form method="get" action="results.php" class="navbar-form"><!--navbar-form Start-->

                            <div class="input-group"><!--input-group Start-->

                                <input type="text" class="form-control" placeholder="search" name="user_query" required>
                                <span class="input-group-btn"><!--input-group-btn start-->

                                    <button type="submit" name="search" value="search" class="btn btn-primary"><!--btn btn-primary Start-->
                                        <i class="fa fa-search"></i>
                                    </button><!--btn btn-primary End-->

                                </span><!--input-group-btn End-->

                            </div><!--input-group End-->

                        </form><!--navbar-form End-->

                    </div><!--collapse clearfix End-->

                </div><!--navbar-collapse collapse End-->

            </div>  <!--container End-->

        </div> <!-- navbar navbar-default End-->


        <div id="content"><!--#content start-->
          <div class="container"> <!--container start-->
            <div class="col-md-12"><!--col-md-12 start-->

             <ul class="breadcrumb"><!--breadcrumb start-->
               <li> <a href="index.php">Home</a>
               </li>
               <li>
                 My Account
               </li>
             </ul><!--breadcrumb End-->
           </div><!--col-md-12 End-->

            <div class="col-md-3"><!--col-md-3 start-->

              <?php
              include("includes/sidebar.php")
               ?>

            </div><!--col-md-3 End-->

             <div class="col-md-9"><!--col-md-9 start-->

                <div class="box"><!--box start-->

                  <h1 align="center"> Please confirm your payment</h1>

                   <form  action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"><!--form start-->

                      <div class="form-group"><!--form-group start-->

                        <label> Invoce No: </label>

                        <input type="text" class="form-control" name="invoice_no" required>

                      </div><!--form-group End-->

                      <div class="form-group"><!--form-group start-->

                        <label> Amount Sent: </label>

                        <input type="text" class="form-control" name="amount_sent" required>

                      </div><!--form-group End-->

                      <div class="form-group"><!--form-group start-->

                        <label> Select Payment Method: </label>

                           <select name="payment_mode" class="form-control"><!--form-control start-->

                            <option> Select Payment Mode</option>
                            <option> Visa </option>
                            <option> Visa Debit </option>
                            <option> Master Card</option>
                            <option> Paypal</option>
                            <option> Western Union</option>


                           </select><!--form-control End-->

                      </div><!--form-group End-->

                      <div class="form-group"><!--form-group start-->

                        <label> Transaction / Refrence ID: </label>

                        <input type="text" class="form-control" name="ref_no" required>

                      </div><!--form-group End-->

                      <div class="form-group"><!--form-group start-->

                        <label> Western Union ID: </label>

                        <input type="text" class="form-control" name="code" required>

                      </div><!--form-group End-->

                      <div class="form-group"><!--form-group start-->

                        <label> Payment Date: </label>

                        <input type="text" class="form-control" name="date" required>

                      </div><!--form-group End-->

                      <div class="text-center"><!--text-center start-->

                        <button class="btn btn-primary btn-lg" name="confirm_payment"><!--btn btn-primary btn-lg start-->

                          <i class="fa fa-user-md"></i> Confirm Payment

                        </button><!--btn btn-primary btn-lg End-->

                      </div><!--text-center End-->

                   </form><!--form End-->

                   <?php

                     if(isset($_POST['confirm_payment'])){
                       $update_id = $_GET['update_id'];
                       $invoice_no = $_POST['invoice_no'];
                       $amount = $_POST['amount_sent'];
                       $payment_mode = $_POST['payment_mode'];
                       $ref_no = $_POST['ref_no'];
                       $code = $_POST['code'];
                       $payment_date = $_POST['date'];
                       $complete = "Complete";
                       $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date)
                       values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";
                       $run_payment = mysqli_query($con,$insert_payment);
                       $update_customer_order = "update customer_orders set order_status = '$complete' where order_id='$update_id'";
                       $run_customer_order = mysqli_query($con,$update_customer_order);
                       $update_pending_order ="update pending_orders set order_status = '$complete' where order_id='$update_id'";
                       $run_pending_order = mysqli_query($con,$update_pending_order);
                       if($run_pending_order){
                         echo "<script>alert('Thank you for purchasing, your order will be processed in 24 hours')</script>";
                         echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                       }

                     }

                    ?>

                </div><!--box End-->

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
<?php } ?>
