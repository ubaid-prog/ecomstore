<?php
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}else{

?>
<div class="row"><!-- row 1 start -->
  <div class="col-lg-12"><!-- col-lg-12 start -->
    <ol class="breadcrumb"><!-- breadcrumb start -->
      <li class="active"><!-- active start -->
       <i class="fa fa-dashboard"></i> Dashboard/ View Manufacturer
      </li><!-- active end -->

    </ol><!-- breadcrumb end -->

  </div><!-- col-lg-12 end -->

</div><!-- row 1 end -->

<div class="row"><!-- row 2 start -->
  <div class="col-lg-12"><!-- col-lg-12 start -->
    <div class="panel panel-default"><!-- panel panel-default start -->
      <div class="panel-heading"><!-- panel-heading start -->
       <h3 class="panel-title"><!-- panel-title start -->

      <i class="fa fa-tags"> View Manufacturer</i>

        </h3><!-- panel-title end -->

      </div><!-- panel-heading end -->

      <div class="panel-body"><!-- panel-body start -->
        <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover start -->

          <thead><!-- thead start -->
            <tr><!-- tr start -->
              <th>Manufacturer ID:</th>
              <th>Manufacturer Title:</th>
              <th>Manufacturer Images:</th>
              <th>Manufacturer Delete:</th>
              <th>Manufacturer Edit:</th>
            </tr><!-- tr end -->
          </thead><!-- thead end -->

           <tbody><!-- tbody start -->
             <?php
             $i=0;
               $get_manufacturer = "select * from manufacturers";
               $run_manufacturer= mysqli_query($con,$get_manufacturer);
               while($row_manufacturer=mysqli_fetch_array($run_manufacturer)){
                 $manufacturer_id = $row_manufacturer['manufacturer_id'];
                 $manufacturer_title = $row_manufacturer['manufacturer_title'];
                 $manufacturer_image = $row_manufacturer['manufacturer_image'];
                 $i++;

              ?>

              <tr><!-- tr start -->
                <td><?php echo $i; ?></td>
                <td><?php echo $manufacturer_title; ?></td>
                <td><img src="other_images/<?php echo $manufacturer_image; ?>" width="60"
                 height="60"></td>
                <td>
                   <a href="index.php?delete_manufacturer=<?php echo $manufacturer_id; ?>">
                    <i class="fa fa-trash-o"></i> Delete
                   </a>
               </td>
                <td>

                  <a href="index.php?edit_manufacturer=<?php echo $manufacturer_id; ?>">
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
