<?php
 error_reporting(0);
 include_once 'include/class.user.php';
 include_once 'testmailer.php';
 include_once 'whmcs/addclient.php';
 include_once 'class.add_client.php';
 
 //User Method Object
 $user = new User();
 
 if (isset($_POST['submit'])) {
     extract($_POST);
     $register = $user->reg_user($fname, $lname, $email, $password, "user");
     if ($register != 0) {
         // include_once './testmailer.php';
 
         $uid = MD5($register);
 
         $mailSubject = "Welcome to GuestPostEngine";
         $mailBody = "Please veriify your account using below link.\n http://localhost:8080/GuestPostEngine/verify.php?verify=".$uid;
 
         addClient($fname, $lname, $email, "", "", "", "", "", "", "");
         sendMail($mailSubject, $mailBody, $email);
           
         // Registration Success
-        echo "<div style='text-align:center'>Registration Successful</div>";
+        echo "<div style='text-align:center' class='login-success'>Registration Successful!</div>";
     } else {
         // Registration Failed
-        echo "<div style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
+        echo "<div class='login-error'>Registration failed. Email or Username already exits please try again.</div>";
     }
 }
 
 ?>
 
 <!DOCTYPE html>
 <html>
 
 <head>
   <title>List of 1484 Websites that accept Guest Blogs - by GuestPostEngine</title>
   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
   <link rel="icon" href="images/favicon.ico" type="image/x-icon">
   <!--Import Google Icon Font-->
-  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
-  <!--Import materialize.css-->
-  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" />
+  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
   <link type="text/css" rel="stylesheet" href="css/style.css" />
   <link type="text/css" rel="stylesheet" href="font/style.css" />
   <link type="text/css" rel="stylesheet" href="css/responsive.css" />
   <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
   <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />
 
   <style>
     .fname, .lname, .email_err, .pass{
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
     <div class="header">
       <!-- header-start -->
       <div class="container-fluid paddingRL">
         <div class="row">
-          <nav>
-            <div class="nav-wrapper">
-              <a href="index.php" class="brand-logo"><img src="images/logo.svg"></a>
-              <ul class="right">
-                <li><a href="signin.php">Sign In</a></li>
-              </ul>
-            </div>
+          <nav class="navbar nav-wrapper">
+            <a href="index.php" class="navbar-brand brand-logo"><img src="images/logo.svg" alt=""></a>
+            <ul class="navbar-nav">
+              <li class="nav-item"><a href="signin.php" class="nav-link">Sign In</a></li>
+            </ul>
           </nav>
         </div>
       </div>
     </div><!-- header-start -->
 
     <div class="account_wrap">
       <div class="container">
         <div class="row">
-          <div class="col s6 right_colum hv100 ">
+          <div class="col-12 col-lg-6 right_colum hv100 ">
             <div class="guest_post_account">
               <div class="row">
-                <form class="col s12" action="" method="post">
+                <form class="col-12" action="" method="post">
                   <h4>Create Your Free Account</h4>
                   <p>Already have an account? <a href="signin.php">Sign In</a></p>
                   <div class="row">
-                    <div class="input-field col s12">
+                    <div class="input-field col-12">
                       <input placeholder="First Name" id="first_name" name="fname" type="text" class="validate">
                       <p><span class="fname hidden">Please Enter a Valid Fullname !</span></p>
                     </div>
                   </div>
                   <div class="row">
-                    <div class="input-field col s12">
+                    <div class="input-field col-12">
                       <input placeholder="Last Name" id="last_name" name="lname" type="text" class="validate">
                       <p><span class="lname hidden">Please Enter a Valid LastName !</span></p>
                     </div>
                   </div>
                   <div class="row">
-                    <div class="input-field col s12">
+                    <div class="input-field col-12">
                       <input type="email" class="validate" name="email" id="email" placeholder="Email">
                       <p><span class="email_err hidden">Please Enter a Valid Email !</span></p>
                     </div>
                   </div>
 
                   <div class="row">
-                    <div class="input-field col s12">
+                    <div class="input-field col-12">
                       <input type="password" class="validate" name="password" id="password" placeholder="Password">
                       <p><span class="pass hidden">Please Enter a Valid Password !</span></p>
                     </div>
                   </div>
 
                   <div class="row">
-                    <div class="input-field col s12">
+                    <div class="input-field col-12">
                       <input type="submit" name="submit" value="Create Account">
                     </div>
                   </div>
                   <div class="row">
-                    <div class="col s12">
+                    <div class="col-12">
                       <div class="agree">
                         <p>By signing up, you agree to guestpostengine</p>
                         <span><a href="#">Terms and Conditions</a> & <a href="#">Privacy Policy</a></span>
                       </div>
                     </div>
                   </div>
 
                 </form>
               </div>
 
             </div>
           </div>
-          <div class="col s6 hv100">
+          <div class="col-12 col-lg-6 hv100">
             <div class="guestpost_right signpage">
               <div class="client_review">
                 <div class='embedsocial-reviews' data-ref="d94fdeee2a313220ccdc77eeccaa72ed6bf54919"></div><script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/embedscript/ri.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialReviewsScript"));</script>
                 
               </div>
             </div>
             
           </div>
         </div>
       </div>
     </div>
 
   </div><!-- main-wrap-end -->
   <!--JavaScript at end of body for optimized loading-->
   <!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
   <script src="js/jquery.min.js"></script>
-  <script type="text/javascript" src="js/materialize.min.js"></script>
+  <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/owl.carousel.js"></script>
   <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script> -->
   <script src="js/init.js"></script>
 
   <script type="text/javascript">
   $(document).ready(function() { 
 
     //For Full name
     $('#first_name').on('keypress keydown keyup',function(){
              var $fname=/^([a-zA-Z]{3,16})$/;
              if (!$(this).val().match($fname)) {
                  $('.fname').removeClass('hidden');
                  $('.fname').show();
              }
            else{
                 $('.fname').addClass('hidden');
                }
          });
     //End Full name
 
         //For Last name
         $('#last_name').on('keypress keydown keyup',function(){
              var $fname=/^([a-zA-Z]{2,16})$/;
              if (!$(this).val().match($fname)) {
                  $('.lname').removeClass('hidden');
                  $('.lname').show();
              }
            else{
                 $('.lname').addClass('hidden');
                }
          });
       //End Last name
 
     // For Email Validation
     $('#email').on('keypress keydown keyup',function(){
         var $ema= /^\S+@\S+$/;
         if (!$(this).val().match($ema)) {
                  $('.email_err').removeClass('hidden');
                  $('.email_err').show();
              }
         else {
                 $('.email_err').addClass('hidden');
              }
         });
       //  End Email Validation
 
       // Password Validation
       $('#password').on('keypress keydown keyup',function(){
         var pass = $('#password').val();
         if (pass.length < 3) {
                  $('.pass').removeClass('hidden');
                  $('.pass').show();
              }
         else {
                 $('.pass').addClass('hidden');
              }
         });
       // End Password Validation
   });
 </script>
 </body>
 
 </html>