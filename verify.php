<?php
 error_reporting(0);
 session_start();
 include_once 'include/class.user.php';
 $user = new User();
 $rowcount = 0;
 if (isset($_GET['verify'])) {
     $rowcount = $user->verifyUser($_GET['verify']);
 }
 
 if (isset($_GET['domainverify'])) {
   $rowcount = $user->verifyDomain($_GET['domainverify'], 1);
 }
 
 ?>
 
 
 
-<!DOCTYPE html>
-<html>
-
-<head>
-    <title>List of 1484 Websites that accept Guest Blogs - by GuestPostEngine</title>
-    <!--Let browser know website is optimized for mobile-->
-    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
-    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
-    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
-    <!--Import Google Icon Font-->
-    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
-    <!--Import materialize.css-->
-    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" />
-    <link type="text/css" rel="stylesheet" href="css/style.css" />
-    <link type="text/css" rel="stylesheet" href="font/style.css" />
-    <link type="text/css" rel="stylesheet" href="css/responsive.css" />
-
-</head>
-
-<body>
-
-
-
-        <div class="header">
-            <!-- header-start -->
-            <div class="container">
-                <div class="row">
-                    <nav>
-
-                        <div class="nav-wrapper">
-                            <a href="#!" class="brand-logo"><img src="images/logo.svg"></a>
-                            <ul class="right">
-                                <li><a href="index.html">Playbook</a></li>
-                                <!-- <li><a href="#signuplogin" class="modal-trigger" class="dropdown-trigger" href="#!" data-target="dropdown1">Login / Signup</a></li> -->
-                                <li><?php
-                                if ($_SESSION['login'] == 1) {
-                                    ?>
-                                    <a class="dropdown-button" href="#" data-activates="dropdown"
-                                        data-beloworigin="true"><?php echo $_SESSION['uid']?><i class="material-icons right">arrow_drop_down</i></a>
-                                    <ul id="dropdown" class="dropdown-content collection">
-                                        <li class="collection-item avatar">
-                                            <a href="users/pages-profile.php" class="secondary-content">Profile</a>
-                                        </li>
-                                        <li class="collection-item avatar">
-                                            <a href="?action=logout" class="secondary-content">Logout</a>
-                                        </li>
-                                    </ul>
-                                    <?php
-                                } else {
-                                    echo '<li><a href="#signuplogin" class="modal-trigger">Login / Signup</a></li>';
-                                }
-                                ?>
-                                </li>
-
-                                <!-- Dropdown Structure -->
-
-                                <!-- Dropdown Trigger -->
-                                <!--  </ul>
-                                <ul id="dropdown" class="dropdown-content collection">
-                                <li class="collection-item avatar">
-                                  <a href="#signuplogin" class="secondary-content modal-trigger">ggggg</a>
-                                </li> 
-
-                                <li class="collection-item avatar">
-                                  <a href="#" class="secondary-content">Logout</a>
-                                </li> 
-                          </ul> -->
-                        </div>
-                    </nav>
-                </div>
-            </div>
-  </div><!-- header-end -->
+<?php include('route.php'); ?>
+ <?php include('header.php'); ?>
 
   <div class="content_section">
   	   <div class="verify_wrapper">
             <div class="container">
                <div class="verify_box">
                   <div class="row">
                   	<div class="verifiedbcx">
                   		<div class="account_has">
                   			 <!-- <img src="images/verify-check.svg" align="" style="width: 60px;"><br> -->
                   		 <h3>
                             <?php
 
                             if ($rowcount) {
                                 echo "Great!!! Your account has been verified";
                             }
 
                         ?></h3><br>
                           <!-- <img src="images/account-verify.png" alt=""> -->
                            <img src="images/verify-check.svg" align="" style="width: 230px;">
                           
                           <div class="verify_nav">
 	                          <ul>
 	                          	 <li><a href="/">Home</a></li>
 	                          	 <li><a href="signin">Login</a></li>
 	                          </ul>
                           </div>
                          </div>
                        </div>
                   </div>
                 </div> 
             </div>
        </div>
   </div>
 
  <!-- footer-start -->
     <div class="footer">
         <div class="container">
             <div class="row">
                 <div class="col s12 m12 l6 webdewcopyright">
                         <ul>
                             <li>Brought to you By webdew</li>
                             <li><a href="#"> Privacy Policy </a></li>
                             <li><a href="#">Terms of Use</a></li>
                         </ul>
                 </div>
                 <div class="col s12 m12 l6 social">
                         <ul>
                             <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                             <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                             <li><a href="#"><img src="images/linkdin.png" alt=""></a></li>
                             <li><a href="#"><img src="images/youtube.png" alt=""></a></li>
                         </ul>
                  </div>
              </div>
             </div>
     </div>
 
 
     </div><!-- main-wrap-end -->
     <!--JavaScript at end of body for optimized loading-->
     <!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
     <script src="js/jquery.min.js"></script>
-    <script src="js/materialize.min.js"></script>
+    <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.js"></script>
-    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script> -->
     <script src="js/init.js"></script>
     <script type="text/javascript">
         (function($) {
             $(function() {
 
                 $('.dropdown-button').dropdown({
                     inDuration: 300,
                     outDuration: 225,
                     hover: true, // Activate on hover
                     belowOrigin: true, // Displays dropdown below the button
                     alignment: 'right' // Displays dropdown with edge aligned to the left of button
                 });
 
             }); // End Document Ready
         })(jQuery); // End of jQuery name space
     </script>
 
 
 </body>
 
 </html>