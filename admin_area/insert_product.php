
<?php

if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}else{


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>

</head>

<body>

    <div class="row">
        <!-- row begin-->

        <div class="col-lg-12">
            <!-- col-lg-12 begin-->

            <ol class="breadcrumb">
                <!-- breadcrumb begin-->

                <li class="active">
                    <!-- active begin-->

                    <i class="fa fa-dashboard"></i> Dashboard / Insert Product

                </li>
                <!--active End-->

            </ol><!-- breadcrumb End-->

        </div><!-- col-lg-12 End-->

    </div><!-- row End-->

    <div class="row">
        <!-- row begin-->

        <div class="col-lg-12">
            <!-- col-lg-12 begin-->

            <div class="panel panel-default">
                <!-- panel panel-default begin-->

                <div class="panel-heading">
                    <!-- panel-heading begin-->

                    <h3 class="panel-title">
                        <!-- panel-title begin-->

                        <i class="fa fa-money fa-fw"></i> Insert Product

                    </h3>
                    <!--panel-title  End-->

                </div>
                <!--panel-heading End-->

            </div>
            <!--panel panel-default End-->

            <div class="panel-body">
                <!-- panel-body begin-->

                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <!-- form-horizontal begin-->

                    <div class="form-group">
                        <!-- form-group  begin-->

                        <label class="col-md-3 control-label"> Product Title </label>

                        <div class="col-md-6">
                            <!-- col-md-6 begin-->

                            <input name="product_title" type="text" class="form-control" required>


                        </div><!-- col-md-6 End-->

                    </div><!-- form-group  End-->
                    

                    <div class="form-group">
                        <!-- form-group  begin-->

                        <label class="col-md-3 control-label"> Manufacturer </label>

                        <div class="col-md-6">
                            <!-- col-md-6 begin-->

                            <select name="manufacturer" class="form-control">
                                <!-- form-control begin-->

                                <option selected disabled>Select a Manufacturer</option>

                                <?php

                                $get_manufacturer = "select * from manufacturers";
                                $run_manufacturer = mysqli_query($con,$get_manufacturer);

                                while ($row_manufacturer=mysqli_fetch_array($run_manufacturer)){

                                    $manufacturer_id = $row_manufacturer['manufacturer_id'];
                                    $manufacturer_title = $row_manufacturer['manufacturer_title'];

                                    echo "

                                    <option value='$manufacturer_id'> $manufacturer_title </option>

                                    ";

                                }

                                ?>

                            </select> <!-- form-control End-->

                        </div><!-- col-md-6 End-->

                    </div><!-- form-group  End-->

                    <div class="form-group">
                        <!-- form-group  begin-->

                        <label class="col-md-3 control-label"> Product Category </label>

                        <div class="col-md-6">
                            <!-- col-md-6 begin-->

                            <select name="product_cat" class="form-control">
                                <!-- form-control begin-->
                                <option selected disabled>Select a Product Category</option>


                                <?php

                                $get_p_cats = "select * from product_categories";
                                $run_p_cats = mysqli_query($con,$get_p_cats);

                                while ($row_p_cats=mysqli_fetch_array($run_p_cats)){

                                    $p_cat_id = $row_p_cats['p_cat_id'];
                                    $p_cat_title = $row_p_cats['p_cat_title'];

                                    echo "

                                    <option value='$p_cat_id'> $p_cat_title </option>

                                    ";

                                }

                                ?>

                            </select> <!-- form-control End-->

                        </div><!-- col-md-6 End-->

                    </div><!-- form-group  End-->

                    <div class="form-group">
                        <!-- form-group  begin-->

                        <label class="col-md-3 control-label"> Category </label>

                        <div class="col-md-6">
                            <!-- col-md-6 begin-->

                            <select name="cat" class="form-control">
                                <!-- form-control begin-->

                                <option selected disabled>Select a Category</option>

                                <?php

                                $get_cat = "select * from categories";
                                $run_cat = mysqli_query($con,$get_cat);

                                while ($row_cat=mysqli_fetch_array($run_cat)){

                                    $cat_id = $row_cat['cat_id'];
                                    $cat_title = $row_cat['cat_title'];

                                    echo "

                                    <option value='$cat_id'> $cat_title </option>

                                    ";

                                }

                                ?>

                            </select> <!-- form-control End-->

                        </div><!-- col-md-6 End-->

                    </div><!-- form-group  End-->

                    <div class="form-group">
                        <!-- form-group  begin-->

                        <label class="col-md-3 control-label"> Product Image 1 </label>

                        <div class="col-md-6">
                            <!-- col-md-6 begin-->

                            <input name="product_img1" type="file" class="form-control" required>


                        </div><!-- col-md-6 End-->

                    </div><!-- form-group  End-->

                    <div class="form-group">
                        <!-- form-group  begin-->

                        <label class="col-md-3 control-label"> Product Image 2 </label>

                        <div class="col-md-6">
                            <!-- col-md-6 begin-->

                            <input name="product_img2" type="file" class="form-control">


                        </div><!-- col-md-6 End-->

                    </div><!-- form-group  End-->

                    <div class="form-group">
                        <!-- form-group  begin-->

                        <label class="col-md-3 control-label"> Product Image 3 </label>

                        <div class="col-md-6">
                            <!-- col-md-6 begin-->

                            <input name="product_img3" type="file" class="form-control">


                        </div><!-- col-md-6 End-->

                    </div><!-- form-group  End-->

                    <div class="form-group">
                        <!-- form-group  begin-->

                        <label class="col-md-3 control-label"> Product Price</label>

                        <div class="col-md-6">
                            <!-- col-md-6 begin-->

                            <input name="product_price" type="text" class="form-control" required>


                        </div><!-- col-md-6 End-->

                    </div><!-- form-group  End-->

                    <div class="form-group">
                        <!-- form-group  begin-->

                        <label class="col-md-3 control-label"> Product Keywords</label>

                        <div class="col-md-6">
                            <!-- col-md-6 begin-->

                            <input name="product_keywords" type="text" class="form-control" required>


                        </div><!-- col-md-6 End-->

                    </div><!-- form-group  End-->

                    <div class="form-group">
                        <!-- form-group  begin-->

                        <label class="col-md-3 control-label"> Product Desc</label>

                        <div class="col-md-6">
                            <!-- col-md-6 begin-->

                            <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>

                        </div><!-- col-md-6 End-->

                    </div><!-- form-group  End-->

                    <div class="form-group">
                        <!-- form-group  begin-->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">
                            <!-- col-md-6 begin-->

                            <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">

                        </div><!-- col-md-6 End-->

                    </div><!-- form-group  End-->

                </form><!-- form-horizontal End-->

            </div><!-- panel-body End-->

        </div>
        <!--col-lg-12 End-->
    </div>
    <!--row End-->

    <script src="js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({selector: 'textarea'});

    </script>

</body>

</html>

<?php

    if(isset($_POST['submit'])){

        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $cat = $_POST['cat'];
        $manufacturer = $_POST['manufacturer'];
        $product_price = $_POST['product_price'];
        $product_keywords = $_POST['product_keywords'];
        $product_desc = $_POST['product_desc'];

        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];

        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];

        move_uploaded_file($temp_name1,"product_images/$product_img1");
        move_uploaded_file($temp_name2,"product_images/$product_img2");
        move_uploaded_file($temp_name3,"product_images/$product_img3");

        $insert_product = "insert into products (p_cat_id,cat_id,manufacturer_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc) values('$product_cat','$cat','$manufacturer_id','NOW()','$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc')";

        $run_product = mysqli_query($con,$insert_product);

        if($run_product){

            echo "<script>alert('Product has been inserted successfully')</script>";
            echo "<script>window.open('index.php?view_products','_self')</script>";

        }

    }
?>
<?php } ?>
