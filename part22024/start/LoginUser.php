<!DOCTYPE html>
<html lang="en">
<?php

include ("header.php");
?>
   <body>
   <div class="container">
    <div class="flex-w flex-tr">
        <!-- Login Form -->
        <div class="login-form size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
            <h4 class="mtext-105 cl2 txt-center p-b-30">
                Log in
            </h4>
            <form action="Register.php" method="post">
                <div class="form-group">
                    <input class="input-field stext-111 cl2 plh3 size-116" type="text" name="email" placeholder="Your Email Address">
                </div>
                <div class="form-group">
                    <input class="input-field stext-111 cl2 plh3 size-116" type="password" name="password" placeholder="Password">
                </div>
                <button class="btn-login flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 trans-04" type="submit" name="signUp">
                    Log in
                </button>
            </form>
        </div>

        <!-- Register Form -->
        <div class="register-form size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
            <h4 class="mtext-105 cl2 txt-center p-b-30">
                Register
            </h4>
            <form action="Register.php" method="post">
                <div class="form-group">
                    <input class="input-field stext-111 cl2 plh3 size-116" type="text" name="firstname" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input class="input-field stext-111 cl2 plh3 size-116" type="text" name="lastname" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input class="input-field stext-111 cl2 plh3 size-116" type="text" name="email" placeholder="Your Email Address">
                </div>
                <div class="form-group">
                    <input class="input-field stext-111 cl2 plh3 size-116" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="input-field stext-111 cl2 plh3 size-116" type="password" name="password2" placeholder="Confirm Password">
                </div>
                <button class="btn-register flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 trans-04" type="submit" name="signUp">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>



   <!-- footer section start -->
   <?php
	include('footer.php');
	?>

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>