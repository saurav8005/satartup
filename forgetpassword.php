<?php 
    session_start();
    error_reporting(0);
    include_once 'include/class.user.php';
    $user = new User();
 
     if(isset($_POST['submit']))
     {
           $db = new DB_con();
           $db = $db->ret_obj();
 
           $uemail = $_POST['user_email'];
            //$uemail = mysqli_real_escape_string($db, $uemail);
             if($user->checkUser($uemail) == "true")
             {
                 $userID = $user->UserID($uemail);
                 $token = $user->generateRandomString(); 
 
                // echo $userID; echo "<br/>";
                // echo $token;
                // die();
 
                 $query = "INSERT INTO recovery_keys SET userID = '$userID', token='$token'";
                 $stmt = $db->prepare($query);
                   if ($stmt) {
                   $stmt->execute();
                   $stmt->close();
                   } else {
                       echo "============Error=============\n";
                   }
 
                 //echo $query; die();
                   if($query)
                     {
                        $send_mail = $user->send_mail($uemail, $token);
                         if($send_mail === 'success')
                         {
                            $msg = 'A mail with recovery instruction has sent to your email.';
                         }
                         else
                         {
                           $msg = 'There is something wrong.';
                         }                    
                         }
                         else
                         {
                             $msg = 'There is something wrong.';
                         }
         
                  }
                     else
                       {
                              $msg = "This email doesn't exist in our database.";
                       }
     }
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
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
 
 </head>
 
 <body class="signup_section">
     <div class="main_warpper">
         <!-- main-wrap-start --> 
         <div class="header"><!-- header-start -->            
             <div class="container-fluid paddingRL">
                 <div class="row">
-                    <nav>
-                        <div class="nav-wrapper">
-                            <a href="index.php" class="brand-logo"><img src="images/logo.svg"></a>
-                            <ul class="right">
-                                <li><a href="signup">Sign up</a></li>
-                            </ul>
-                        </div>
-                    </nav>
+                  <nav class="navbar nav-wrapper">
+                    <a href="index.php" class="navbar-brand brand-logo"><img src="images/logo.svg" alt=""></a>
+                    <ul class="navbar-nav">
+                        <li class="nav-item"><a href="signup" class="nav-link">Sign up</a></li>
+                    </ul>
+                  </nav>
                 </div>
             </div>
         </div><!-- header-start -->
       
              <div class="account_wrap"> 
              <div class="container">       
                 <div class="row">
-                  <div class="col s6 right_colum hv100 ">
+                  <div class="col-12 col-lg-6 right_colum hv100 ">
                     <div class="guest_post_account">
-                        <div class="row">
+                       
                           <!-- Forget password Logic -->
-                            <form class="col s12" method="POST">
+                            <form class="col-12" method="POST">
                               <h4>Forget Your Password !</h4>
 
                               <?php if(isset($msg)) {?>
                             <div class="<?php echo $msgclass; ?>" style="padding:5px;"><?php echo $msg; ?></div>
                              <?php } ?>
 
                               <p>Forgot your password? No problem, we will fix it. Just type your email below and we will send you password recovery instruction to your email. Follow easy steps to get back to your account.</strong><p>                             
                                <div class="row">
-                                <div class="input-field col s12">
+                                <div class="input-field col-12 mb-2">
                                   <input id="email" type="email" name="user_email" class="validate" placeholder="Email">
                                 </div>
                               </div>
                              
                               <div class="row">
-                                <div class="input-field col s12">
+                                <div class="input-field col-12">
                                    <input type="submit" name="submit" value="submit">
                                 </div>
                               </div>
-                              <p><a href="login.php">Back to login</a></p>
+                              <p class="mt-2"><a href="signin.php">Back to login</a></p>
                             </form>
                             <!-- End Forget Password Logic -->
 
                           </div>
-                        
-                    </div>
                  </div>
-                 <div class="col s6 hv100">
+                 <div class="col-12 col-lg-6 hv100">
                      <div class="guestpost_right">
                        
 
                          <div class="guest_potwhy pd-top">
                            <div class="row">
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
-<script type="text/javascript" src="js/materialize.min.js"></script>
+<script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/owl.carousel.js"></script>
         <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script> -->
 <script src="js/init.js"></script>
 </body>
 </html>