<?php
 session_start();
 error_reporting(0);
 include_once 'include/class.user.php';
 $user = new User();
 $rowcount = 0;
 if (isset($_GET['verify'])) {
     $rowcount = $user->verifyUser($_GET['verify']);
 }
 
 if (isset($_GET['domainverify'])) {
   $rowcount = $user->verifyDomain($_GET['domainverify'], 1);
 }
 
 if (isset($_POST['submit'])) {
     extract($_POST);
     $login = $user->check_login($emailusername, $password);
 
    // echo $login;
     //die();
 
     if ($login) {
         // Registration Success
         header("location:/");
     } else {
         // Registration Failed
-        echo 'Wrong username or password';
+        echo '<p class="login-error">Invalid username or password!</p>';
     }
 }
 
 //remember password through cookies
       if($_POST["remember_me"]=='1' || $_POST["remember_me"]=='on')
       {
           $hour = time() + 3600 * 24 * 30;
           setcookie('emailusername', $login, $hour);
           setcookie('password', $password, $hour);
       }
 
 //End remember password through cookies
 
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
     <title>List of 1484 Websites that accept Guest Blogs - by GuestPostEngine</title>
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
     <link rel="icon" href="images/favicon.ico" type="image/x-icon">
-    <!--Import Google Icon Font-->
-    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
-    <!--Import materialize.css-->
-    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" />
+    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
     <link type="text/css" rel="stylesheet" href="css/style.css" />
     <link type="text/css" rel="stylesheet" href="font/style.css" />
     <link type="text/css" rel="stylesheet" href="css/responsive.css" />
     <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
     <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />
 
     <style>
     .emsg, .emsg1{
     color: red;
       }
     .hidden {
      visibility:hidden;
       }
     </style>
 
 </head>
 
 <body class="signup_section">
     <div class="main_warpper">
         <!-- main-wrap-start --> 
         <div class="header"><!-- header-start -->            
             <div class="container-fluid paddingRL">
                 <div class="row">
 
                  <?php
                  if ($rowcount) {
                  echo "Great!!! Your account has been verified";
                   }
                   ?>
-                    <nav>
-                        <div class="nav-wrapper">
-                            <a href="index.php" class="brand-logo"><img src="images/logo.svg"></a>
-                            <ul class="right">
-                                <li><a href="signup.php">Sign up</a></li>
-                            </ul>
-                        </div>
+                    <nav class="navbar nav-wrapper">
+                      <a class="navbar-brand brand-logo" href="index.php">
+                        <img src="images/logo.svg" alt="">
+                      </a>
+                      <ul class="navbar-nav">
+                        <li class="nav-item"><a href="signup.php" class="nav-link">Sign up</a></li>
+                      </ul>
                     </nav>
                 </div>
             </div>
         </div><!-- header-start -->
       
              <div class="account_wrap"> 
              <div class="container">       
                 <div class="row">
-                  <div class="col s6 right_colum hv100 ">
+                  <div class="col-12 col-lg-6 right_colum hv100 ">
                     <div class="guest_post_account">
                         <div class="row">
                         <!-- Login Form Start -->
-                            <form class="col s12" action="" method="post" name="login" id="first_form">
+                            <form class="col-12" action="" method="post" name="login" id="first_form">
                               <h4>Login</h4>
                               <p>Or<a href="signup.php"> Create an account</a></p>                             
                                <div class="row">
-                                <div class="input-field col s12">
+                                <div class="input-field col-12">
                                   <input id="email" type="email" name="emailusername" class="validate" placeholder="Email" value="<?php if(isset($_COOKIE["emailusername"])) { echo $_COOKIE["emailusername"]; } ?>">
                                   <p><span class="emsg hidden">Please Enter a Valid Email !</span></p>
                                 </div>
                               </div>
                              
                               <div class="row">
-                                <div class="input-field col s12">
+                                <div class="input-field col-12">
                                   <input id="password" type="password" name="password" class="validate" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
                                   <p><span class="emsg1 hidden">Please Enter a Valid Password !</span></p>
                                 </div>
                               </div>
 
                               <div class="row">
-                                <div class="input-field col s12">
+                                <div class="input-field col-12">
                                    <input type="submit" name="submit" value="Login" id="strtMsg">
                                 </div>
                               </div>
 
                                <div class="row">                                  
-                                   <div class="col s6">
+                                   <div class="col-6">
                                     <input type="checkbox" id="check" name="remember_me">
                                     <label for="check">Remember me</label>
                                   </div>
                                    
                                   
-                                <div class="col s6"> 
-                                 <p class="right-align"><a href="forgetpassword.php"> Forgot password?</a></p>                                   
+                                <div class="col-6"> 
+                                 <p class="text-right"><a href="forgetpassword.php"> Forgot password?</a></p>                                   
                                 </div>
                               </div>
 
                               <div class="row">
-                                 <div class="col s12">
+                                 <div class="col-12">
                                  <div class="agree">
                                   <p>By signing up, you agree to guestpostengine</p>
                                  <span><a href="#">Terms and Conditions</a> & <a href="#">Privacy Policy</a></span>
                                </div>
                             </div>
                           </div>
                         </form>
                         <!-- Login Form End Here -->
                           </div>
                         
                     </div>
                  </div>
-                 <div class="col s6 hv100">
+                 <div class="col-12 col-lg-6 hv100">
                      <div class="guestpost_right">
-                        <div class="row">
-                         <div class="guest_potwhy pd-top">
+                       
+                         <div class="row guest_potwhy pd-top">
                           <div class="Head_titale">
                             <h2 class="">Why<span>Guest Post Engine</span></h2>
                          </div>
                          
-                              <div class="col s12 m6 l6 featured_cat">
+                              <div class="col-12 col-sm-6 featured_cat">
                                     <div class="icon_guest">
                                      <img src="images/Robust-Engine.png" alt="">
                                     </div>
                                    <h4>Robust Engine</h4>                                   
                               </div>
-                              <div class="col s12 m6 l6 featured_cat">
+                              <div class="col-12 col-sm-6 featured_cat">
                                    <div class="icon_guest">
                                      <img src="images/Largest-Database.png" alt="">
                                     </div>
                                    <h4>Largest Database</h4>                                   
                               </div>
-                              <div class="col s12 m6 l6 featured_cat">
+                              <div class="col-12 col-sm-6 featured_cat">
                                    <div class="icon_guest">
                                      <img src="images/Updated-Key-Metrics.png" alt="">
                                     </div>
                                    <h4>Updated Key Metrics</h4>                                 
                               </div> 
 
-                               <div class="col s12 m6 l6 featured_cat">
+                               <div class="col-12 col-sm-6 featured_cat">
                                    <div class="icon_guest">
                                      <img src="images/Quality-Prospecting.png" alt="">
                                     </div>
                                    <h4>Quality Prospecting</h4> 
                               </div> 
 
-                               <div class="col s12 m6 l6 featured_cat">
+                               <div class="col-12 col-sm-6 featured_cat">
                                    <div class="icon_guest">
                                      <img src="images/Save-Time-&-Money.png" alt="">
                                     </div>
                                    <h4>Save Time & Money</h4>                                   
                               </div> 
-                               <div class="col s12 m6 l6 featured_cat">
+                               <div class="col-12 col-sm-6 featured_cat">
                                    <div class="icon_guest">
                                      <img src="images/Powerful-Backlinks.png" alt="">
                                     </div>
                                    <h4>Powerful Backlinks</h4>                                   
                               </div>
                            </div>
-                        </div>
+                       
                       </div>
                     </div>
                  </div>           
                </div>           
              </div>
        
     </div><!-- main-wrap-end -->
 <script src="js/jquery.min.js"></script>
-<script type="text/javascript" src="js/materialize.min.js"></script>
+<script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/owl.carousel.js"></script>
         
 <script src="js/init.js"></script>
 
 <script type="text/javascript">
   $(document).ready(function() { 
     // For Email Validation
     $('#email').on('keypress keydown keyup',function(){
         var $ema= /^\S+@\S+$/;
         if (!$(this).val().match($ema)) {
                  $('.emsg').removeClass('hidden');
                  $('.emsg').show();
              }
         else {
                 $('.emsg').addClass('hidden');
              }
         });
       //  End Email Validation
 
       // Password Validation
       $('#password').on('keypress keydown keyup',function(){
         var pass = $('#password').val();
         if (pass.length < 3) {
                  $('.emsg1').removeClass('hidden');
                  $('.emsg1').show();
              }
         else {
                 $('.emsg1').addClass('hidden');
              }
         });
       // End Password Validation
   });
 </script>
 </body>
 </html>