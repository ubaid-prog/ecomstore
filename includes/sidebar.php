<div class="panel panel-default sidebar-menu">
  <!-- panel panel-default sidebar-menu start-->
  <div class="panel-heading">
    <!--panel-heading start-->
    <h3 class="panel-title">
      Manufacturers

      <div class="pull-right">
        <!--pull-right start-->
        <a href="#" style="color:black;">

          <span class="nav-toggle hide-show">
            <!--nav-toggle hide-show start-->

            Hide

          </span>
          <!--nav-toggle hide-show end-->

        </a>
      </div>
      <!--pull-right end-->

    </h3>
  </div>
  <!--panel-heading end-->

  <div class="panel-collapse collapse-data">
    <!--panel-collapse collapse-data start-->

    <div class="panel-body">
      <!--panel-body-1 start-->

      <div class="input-group">
        <!--input-group start-->
        <!--group start-->

        <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-manufaturer"
          data-action="filter" placeholder="Filter Manufacturer">

        <a class="input-group-addon">
          <!--input-group-addon start-->

          <i class="fa fa-search"></i>

        </a>
        <!--input-group-addon end-->

      </div>
      <!--input-group end-->
    </div>
    <!--panel-body-1 end-->

    <div class="panel-body scroll-menu">
      <!--panel-body-2 start-->

      <ul class="nav nav-pills nav-stacked category-menu" id="dev-manufaturer">
        <!--nav nav-pills nav-stacked category-menu start-->

        <?php 
        
          $get_manufacturer = "select * from manufacturers where manufacturer_top='yes'";
          $run_manufacturer = mysqli_query($con,$get_manufacturer);

          while($row_manufacturer=mysqli_fetch_array($run_manufacturer)){

            $manufacturer_id = $row_manufacturer['manufacturer_id'];
            $manufacturer_title = $row_manufacturer['manufacturer_title'];
            $manufacturer_image = $row_manufacturer['manufacturer_image'];

              if($manufacturer_image == ""){

              }else{
                $manufacturer_image = "<img src='admin_area/other_images/$manufacturer_image' width='20px'> &nbsp;";
              }
                
               echo "<li style='background:#ddd' class='checkbox checkbox-primary'>
                 
                 <a>
                   <lable>
                     <input value='$manufacturer_id' type='checkbox' class='get_manufacturer' 
                     name='manufacturer'>
                      <span>
                     $manufacturer_image
                     $manufacturer_title
                      </span>
                   </lable>
                 </a>

               </li>
               ";

          }

          $get_manufacturer = "select * from manufacturers where manufacturer_top='no'";
          $run_manufacturer = mysqli_query($con,$get_manufacturer);

          while($row_manufacturer=mysqli_fetch_array($run_manufacturer)){

            $manufacturer_id = $row_manufacturer['manufacturer_id'];
            $manufacturer_title = $row_manufacturer['manufacturer_title'];
            $manufacturer_image = $row_manufacturer['manufacturer_image'];

              if($manufacturer_image == ""){

              }else{
                $manufacturer_image = "<img src='admin_area/other_images/$manufacturer_image' width='20px'> &nbsp;";
              }
                
               echo "<li class='checkbox checkbox-primary'>
                 
                 <a>
                   <lable>
                     <input value='$manufacturer_id' type='checkbox' class='get_manufacturer' 
                     name='manufacturer'>
                     
                      <span>

                     $manufacturer_image
                     $manufacturer_title
                     
                      </span>
                   </lable>
                 </a>

               </li>
               ";

          }


        ?>

      </ul>
      <!--nav nav-pills nav-stacked category-menu end-->
    </div>
    <!--panel-body-2 end-->

  </div>
  <!--panel-collapse collapse-data end-->

</div><!-- panel panel-default sidebar-menu End-->

<div class="panel panel-default sidebar-menu">
  <!-- panel panel-default sidebar-menu start-->
  <div class="panel-heading">
    <!--panel-heading start-->
    <h3 class="panel-title">
      Categories

      <div class="pull-right">
        <!--pull-right start-->
        <a href="#" style="color:black;">

          <span class="nav-toggle hide-show">
            <!--nav-toggle hide-show start-->

            Hide

          </span>
          <!--nav-toggle hide-show end-->

        </a>
      </div>
      <!--pull-right end-->

    </h3>
  </div>
  <!--panel-heading end-->

  <div class="panel-collapse collapse-data">
    <!--panel-collapse collapse-data start-->

    <div class="panel-body">
      <!--panel-body-1 start-->

      <div class="input-group">
        <!--input-group start-->
        <!--group start-->

        <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-cat"
          data-action="filter" placeholder="Filter Categories">

        <a class="input-group-addon">
          <!--input-group-addon start-->

          <i class="fa fa-search"></i>

        </a>
        <!--input-group-addon end-->

      </div>
      <!--input-group end-->
    </div>
    <!--panel-body-1 end-->

    <div class="panel-body scroll-menu">
      <!--panel-body-2 start-->

      <ul class="nav nav-pills nav-stacked category-menu" id="dev-cat">
        <!--nav nav-pills nav-stacked category-menu start-->

        <?php 
        
          $get_cat = "select * from categories where cat_top='yes'";
          $run_cat = mysqli_query($con,$get_cat);

          while($row_cat=mysqli_fetch_array($run_cat)){

            $cat_id = $row_cat['cat_id'];
            $cat_title = $row_cat['cat_title'];
            $cat_image = $row_cat['cat_image'];

              if($cat_image == ""){

              }else{
                $cat_image = "<img src='admin_area/other_images/$cat_image' width='20px'> &nbsp;";
              }
                
               echo "<li style='background:#ddd' class='checkbox checkbox-primary'>
                 
                 <a>
                   <lable>
                     <input value='$cat_id' type='checkbox' class='get_cat' 
                     name='cat'>
                      <span>

                     $cat_image
                     $cat_title      

                     </span>
                   </lable>
                 </a>

               </li>
               ";

          }

          $get_cat = "select * from categories where cat_top='no'";
          $run_cat = mysqli_query($con,$get_cat);

          while($row_cat=mysqli_fetch_array($run_cat)){

            $cat_id = $row_cat['cat_id'];
            $cat_title = $row_cat['cat_title'];
            $cat_image = $row_cat['cat_image'];

              if($cat_image == ""){

              }else{
                $cat_image = "<img src='admin_area/other_images/$cat_image' width='20px'> &nbsp;";
              }
                
               echo "<li style='background:#ddd' class='checkbox checkbox-primary'>
                 
                 <a>
                   <lable>
                     <input value='$cat_id' type='checkbox' class='get_cat' 
                     name='category'>
                     
                      <span>

                     $cat_image
                     $cat_title      

                      </span>
                   </lable>
                 </a>

               </li>
               ";

          }


        ?>

      </ul>
      <!--nav nav-pills nav-stacked category-menu end-->
    </div>
    <!--panel-body-2 end-->

  </div>
  <!--panel-collapse collapse-data end-->

</div><!-- panel panel-default sidebar-menu End-->

<div class="panel panel-default sidebar-menu">
  <!-- panel panel-default sidebar-menu start-->
  <div class="panel-heading">
    <!--panel-heading start-->
    <h3 class="panel-title">
      Product Categories

      <div class="pull-right">
        <!--pull-right start-->
        <a href="#" style="color:black;">

          <span class="nav-toggle hide-show">
            <!--nav-toggle hide-show start-->

            Hide

          </span>
          <!--nav-toggle hide-show end-->

        </a>
      </div>
      <!--pull-right end-->

    </h3>
  </div>
  <!--panel-heading end-->

  <div class="panel-collapse collapse-data">
    <!--panel-collapse collapse-data start-->

    <div class="panel-body">
      <!--panel-body-1 start-->

      <div class="input-group">
        <!--input-group start-->
        <!--group start-->

        <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-p_cat"
          data-action="filter" placeholder="Filter Product Categories">

        <a class="input-group-addon">
          <!--input-group-addon start-->

          <i class="fa fa-search"></i>

        </a>
        <!--input-group-addon end-->

      </div>
      <!--input-group end-->
    </div>
    <!--panel-body-1 end-->

    <div class="panel-body scroll-menu">
      <!--panel-body-2 start-->

      <ul class="nav nav-pills nav-stacked category-menu" id="dev-p_cat">
        <!--nav nav-pills nav-stacked p_category-menu start-->

        <?php 
        
          $get_p_cat = "select * from product_categories where p_cat_top='yes'";
          $run_p_cat = mysqli_query($con,$get_p_cat);

          while($row_p_cat=mysqli_fetch_array($run_p_cat)){

            $p_cat_id = $row_p_cat['p_cat_id'];
            $p_cat_title = $row_p_cat['p_cat_title'];
            $p_cat_image = $row_p_cat['p_cat_image'];

              if($p_cat_image == ""){

              }else{
                $p_cat_image = "<img src='admin_area/other_images/$p_cat_image' width='20px'> &nbsp;";
              }
                
               echo "<li style='background:#ddd' class='checkbox checkbox-primary'>
                 
                 <a>
                   <lable>
                     <input value='$p_cat_id' type='checkbox' class='get_p_cat' 
                     name='p_cat'>
                      <span>
                     $p_cat_image
                     $p_cat_title      
                      </span>
                   </lable>
                 </a>

               </li>
               ";

          }

          $get_p_cat = "select * from product_categories where p_cat_top='no'";
          $run_p_cat = mysqli_query($con,$get_p_cat);

          while($row_p_cat=mysqli_fetch_array($run_p_cat)){

            $p_cat_id = $row_p_cat['p_cat_id'];
            $p_cat_title = $row_p_cat['p_cat_title'];
            $p_cat_image = $row_p_cat['p_cat_image'];

              if($p_cat_image == ""){

              }else{
                $p_cat_image = "<img src='admin_area/other_images/$p_cat_image' width='20px'> &nbsp;";
              }
                
               echo "<li style='background:#ddd' class='checkbox checkbox-primary'>
                 
                 <a>
                   <lable>
                     <input value='$p_cat_id' type='checkbox' class='get_p_cat' 
                     name='p_cat'>
                     
                       <span>
                     $p_cat_image
                     $p_cat_title      
                      </span>   

                   </lable>
                 </a>

               </li>
               ";

          }


        ?>

      </ul>
      <!--nav nav-pills nav-stacked category-menu end-->
    </div>
    <!--panel-body-2 end-->

  </div>
  <!--panel-collapse collapse-data end-->

</div><!-- panel panel-default sidebar-menu End-->

