<?php

$active='Shop';
include("includes/header.php");

?>

<div id="content">
    <!-- #content Begin -->
    <div class="container">
        <!-- container Begin -->
        <div class="col-md-12">
            <!-- col-md-12 Begin -->

            <ul class="breadcrumb">
                <!-- breadcrumb Begin -->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Shop
                </li>
            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->

        <div class="col-md-3">
            <!-- col-md-3 Begin -->

            <?php

            include("includes/sidebar.php");

            ?>

        </div><!-- col-md-3 Finish -->

        <div class="col-md-9">
            <!-- col-md-9 Begin -->

                    <div class='box'><!-- box Begin -->
                           <h1>Shop</h1>
                           <p>
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                           </p>
                       </div><!-- box Finish -->


            <div id="products" class="row">
                <!-- row Begin -->

                <?php getProducts(); ?>

            </div><!-- row Finish -->

            <center>
                <ul class="pagination">
                    <!-- pagination Begin -->
                    <?php getPaginator(); ?>
                </ul><!-- pagination Finish -->
            </center>

        </div><!-- col-md-9 Finish -->

        <div id="wait" class="wait" style="position:absolute;top:40%;left:45%;padding: 200px
        100px 100px 100px;">
        </div>

    </div><!-- container Finish -->
</div><!-- #content Finish -->

<?php

include("includes/footer.php");

?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script>

         $(document).ready(function(){
                // Start hide & show sidebar toggle //
             $('.nav-toggle').click(function(){
                
                 $('.panel-collapse,.collapse-data').slideToggle(700,function(){
                     
                     if($(this).css('display')=='none'){
                        
                        $(".hide-show").html('Show');

                     }else{

                            $(".hide-show").html('Hide');

                     }

                });

             });

             // Finish hide & show sidebar toggle //

             // start search filter by typing letters//

            $(function(){

                $.fn.extend({
                  
                  filterTable: function(){
                     
                      return this.each(function(){
                       
                             $(this).on('keyup', function(){
                              
                              var $this = $(this),
                              search = $this.val().toLowerCase(),
                              target = $this.attr('data-filters'),
                              handle = $(target),
                              rows = handle.find('li a');

                              if(search == ''){
                                  rows.show();

                              }else{
                                rows.each(function(){

                                    var $this = $(this);

                                    $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() :
                                    $this.show();


                                });
                              }

                             });

                         });

                     }

                });

                $('[data-action="filter"][id="dev-table-filter"]').filterTable();
           
            });

             // finish search filter by typing letters//


         });

</script>

</body>

</html>