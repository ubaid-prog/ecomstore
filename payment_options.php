<div class="box"><!-- box start-->

<?php

$session_email = $_SESSION['customer_email'];
$select_customer = "select * from customers where customer_email='$session_email'";
$run_customer = mysqli_query($con,$select_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_id = $row_customer['customer_id'];

?>

      <h1 class="text-center">Payment Options</h1>

      <p class="lead text-center"><!-- lead text-center start-->

        <a href="order.php?c_id=<?php echo $customer_id ?>">Offline Payment</a>

      </p><!-- lead text-center end-->

      <center><!-- center start-->

        <p class="lead"><!-- lead start-->

         <a href="#">

           Paypal Payment
           <img class="img-responsive" src="images/paypal.png" alt="img-paypal">

         </a>

        </p><!-- lead end-->

      </center><!-- center end-->

</div><!-- box end-->
