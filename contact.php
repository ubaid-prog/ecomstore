<?php
$active='Contact';

include("includes/header.php");

?>

        <div id="content"><!--#content start-->
          <div class="container"> <!--container start-->
            <div class="col-md-12"><!--col-md-12 start-->

             <ul class="breadcrumb"><!--breadcrumb start-->
               <li> <a href="index.php">Home</a>
               </li>
               <li>
               Contact Us
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

                <div class="box-header"><!--box-header start-->

                  <center><!--center start-->

                    <h2>Feel Free To Get In Touch</h2>

                    <p class="text-muted"><!--text-muted start-->

                    If you have any questions feel free to contact us, we are available <strong>24/7.</strong>

                    </p><!--text-muted End-->

                  </center><!--center End-->

                    <form action="contact.php" method="post"><!--form start-->

                        <div class="form-group"><!--form-group start-->

                         <label>Name</label>

                         <input type="text" class="form-control" name="name" required>

                        </div><!--form-group End-->
                        <div class="form-group"><!--form-group start-->

                         <label>E-mail</label>

                         <input type="text" class="form-control" name="email" required>

                        </div><!--form-group End-->
                        <div class="form-group"><!--form-group start-->

                         <label>Subject</label>

                         <input type="text" class="form-control" name="subject" required>

                        </div><!--form-group End-->
                        <div class="form-group"><!--form-group start-->

                         <label>Message</label>

                          <textarea name="message" class="form-control"></textarea>

                        </div><!--form-group End-->

                        <div class="text-center"><!--text-center start-->

                          <button type="submit" name="submit" class="button btn btn-primary">
                          <i class="fa fa-user-md"></i> Send Message
                          </button>
                        </div><!--text-center End-->

                    </form><!--form End-->

                    <?php

                     if(isset($_POST['submit'])){
                       /// Admin recives messages with this ///
                       $sender_name = $_POST['name'];
                       $sender_email = $_POST['email'];
                       $sender_subject = $_POST['subject'];
                       $sender_message = $_POST['message'];
                       $receiver_email = "urehman90@gmail.com";
                       mail($sender_name,$sender_email,$sender_subject,$sender_message,$receiver_email);
                       /// Auto Reply to sender with this///
                       $email = $_POST['email'];
                       $subject = "Welcome to MyShop";
                       $msg = "Thanks for contacting us. We aim to reply in 3 to 5 working days";
                       $from = "urehman90@gmail.com";
                       mail($email,$subject,$msg,$from);
                       echo "<h2 align='center'>Your message has been sent successfully!</h2>";

                     }

                    ?>

                </div><!--box-header End-->

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
