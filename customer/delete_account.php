<center><!-- center start -->

<h1> Do you really want to delete your account? </h1>

  <form  action="" method="post"><!-- form start -->

     <input type="submit" name="Yes" value="Yes, I want delete" class="btn btn-danger">

     <input type="submit" name="No" value="No, I don't want delete" class="btn btn-primary">

  </form><!-- form End -->

</center><!-- center End -->

<?php

$c_email = $_SESSION['customer_email'];
if(isset($_POST['Yes'])){
  $delete_customer = "delete from customers where customer_email='$c_email'";
  $run_delete_customer = mysqli_query($con,$delete_customer);
  if($run_delete_customer){
    session_destroy();
    echo "<script>alert('You have successfully deleted your account!')</script>";
    echo "<script>window.open('../index.php','_self')</script>";

  }
}
if(isset($_POST['No'])){
  echo "<script>window.open('my_account.php?my_orders')</script>";
}

?>
