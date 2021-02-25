<?php

$active='Shop';
include("includes/header.php");

?>

<div id="content"><!-- #content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12 Begin -->

            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Your searched products
                </li>
            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->

        <div class="col-md-3"><!-- col-md-3 Begin -->

            <?php

            include("includes/sidebar.php");

            ?>

        </div><!-- col-md-3 Finish -->
          <?php 
            if (isset($_POST['submit-search'])){
                $search = mysqli_real_escape_string($con,$_POST['search']);
                $sql = "select * from products where product_title LIKE '%$search%' 
                OR product_img1 LIKE '%$search%' OR product_keywords LIKE '%$search%'
                OR product_desc LIKE '%$search%'";
                $result = mysqli_query($con,$sql);
                $queryResult = mysqli_num_rows($result);
                 echo "There are ".$queryResult." results! ";
                if($queryResult > 0){
                      while ($row = mysqli_fetch_assoc($result)){
                        echo " <a href='shop.php'></a> <div>
                        <h3>".$row['product_title']."</h3>
                        <h3>".$row['product_img1']."</h3>
                        <h3>".$row['product_keywords']."</h3>
                        <h3>".$row['product_desc']."</h3>
       
                        </div></a>";
                      }
                }else{
                    echo "There are no results matching your search!";
                }
            }
          ?>
      
           

            <?php

             getpcatpro();
             getcatpro();

             ?>

        </div><!-- col-md-9 Finish -->

    </div><!-- container Finish -->
</div><!-- #content Finish -->

<?php

include("includes/footer.php");

?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>
</html>
