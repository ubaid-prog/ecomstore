<?php

    $active='Home';

    include("includes/header.php");

 ?>

<div class="container" id="slider">
    <!--container Start-->

    <div class="col-md-12">
        <!--col-md-12 Start-->

        <div class="carousel slide" id="myCarousel" data-ride="carousel">
            <!--carousel slide Start-->

            <ol class="carousel-indicators">
                <!--carousel-indicators Start-->

                <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>

            </ol>
            <!--carousel-indicators End-->

            <div class="carousel-inner">
                <!--carousel-inner Start-->

                <?php
                    
                    $get_slides = "select * from slider LIMIT 0,1";
                    
                    $run_slides = mysqli_query($con,$get_slides);
                    
                    while($row_slides=mysqli_fetch_array($run_slides)){
                        
                        $slide_name = $row_slides["slide_name"];
                        $slide_image = $row_slides["slide_image"];
                        $slide_url = $row_slides["slide_url"];

                        
                        echo "
                        
                        <div class='item active'>

                          <a href='$slide_url'>
                             <img src='admin_area/slides_images/$slide_image'>
                          </a>

                        </div>
                        
                        ";
                
                    }
                    
                    $get_slides = "select * from slider LIMIT 1,3";

                    $run_slides = mysqli_query($con,$get_slides);

                    while($row_slides=mysqli_fetch_array($run_slides)){

                        $slide_name = $row_slides["slide_name"];
                        $slide_image = $row_slides["slide_image"];
                        $slide_url = $row_slides["slide_url"];

                        echo "
                        
                        <div class='item'>

                          <a href='$slide_url'>
                             <img src='admin_area/slides_images/$slide_image'>
                          </a>

                        </div>
                        
                        ";
                
                    }
                    
                    ?>

            </div>
            <!--carousel-inner End-->

            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                <!--left carousel-control start-->
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!--left carousel-control End-->

            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                <!--right carousel-control start-->
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--Right carousel-control End-->

        </div>
        <!--carousel slide End-->

    </div>
    <!--col-md-12 End-->
</div>
<!--container End -->

<div id="advantages">
    <!--advantages start -->
    <div class="container">
        <!--container start -->

        <div class="same-height-row">
            <!--same-height-row start -->

             <?php 
             
              $get_boxes = "select * from boxes_section";
              $run_boxes = mysqli_query($con,$get_boxes);

              while($run_boxes_section = mysqli_fetch_array($run_boxes)){
                  $box_id = $run_boxes_section['box_id'];
                  $box_title = $run_boxes_section['box_title'];
                  $box_desc = $run_boxes_section['box_desc'];

             
             ?>

             <div class="col-sm-4">
                <!--col-sm-4 start -->

                <div class="box same-height">
                    <!--box same-height start -->

                      <div class="icon">
                        <!--icon start -->

                        <i class="fa fa-heart"></i>

                      </div>
                      <!--icon End-->

                      <h3> <a href="#"><?php echo $box_title; ?></a> </h3>

                      <p><?php echo $box_desc; ?></p>
 
                    </div>
                      <!--box same-height End -->

                 </div>
            <!--col-sm-4 End -->

            <?php  } ?>

        </div>
        <!--same-height-row End -->

    </div>
    <!--container End -->

</div>
<!--advantages End -->

<div id="hot">
    <!--#hot start-->

    <div class="box">
        <!--box start-->

        <div class="container">
            <!--container start-->

            <div class="col-md-12">
                <!--col-md-12 start-->

                <h2>
                    Our Latest Products
                </h2>

            </div>
            <!--col-md-12 End-->

        </div>
        <!--container End-->

    </div>
    <!--box End-->
</div>
<!--#hot End-->

<div id="content" class="container">
    <!--container start-->

    <div class="row">
        <!--row start-->

        <?php
            
            getPro();
            
            ?>
    </div>
    <!--row End-->
</div>
<!--container End-->

<?php
include("includes/footer.php")
 ?>

<script src="js/jquery-331.min.js"> </script>
<script src="js/bootstrap-337.min.js"> </script>

</body>

</html>
