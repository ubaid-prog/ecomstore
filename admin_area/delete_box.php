<?php
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}else{

?>
<?php 

 if(isset($_GET['delete_box'])){
     $delete_box_id = $_GET['delete_box'];
     $delete_box = "delete from boxes_section where box_id='$delete_box_id'";
     $run_delete_box = mysqli_query($con,$delete_box);
     if($run_delete_box){
         echo "<script>alert('One of your box section has been deleted!')</script>";
         echo "<script>window.open('index.php?view_boxes','_self')</script>";
     }
 }

?>



<?php } ?>