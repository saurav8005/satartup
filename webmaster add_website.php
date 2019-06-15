<?php
 session_start();
 //error_reporting(0);
     include_once '../include/class.user.php';
     $user = new User();
     $uid = $_SESSION['uid'];
 
     $success = '';
     $Error = '';
     if (!$user->get_session()) {
         header("location:/");
     }
 
      if (isset($_POST['submit'])) {
          extract($_POST);
          $domain = $user->insert_domain($Domain, $Guideline_URL, $FirstName, $LastName, $Email);
          if ($domain) {
              $success = "Added Successfully !!";
          } else {
              $Error = "Something Wrong !!";
          }
      }   
 ?>
 
 
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
 
     <meta charset="utf-8">
     <title>Add Website</title>
     <meta name="description" content="Get an Access to the World's Largest Database of 1807 Websites that accept Guest Post on their Blog. Now generate Quality Backlinks for better Rankings in Search Engines like Google and Bing.">
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
     <!-- Added the Dynamic CSS file -->
     <?php include('custom_style.php'); ?> 
 
     <style type="text/css">
         .web_error {
             position: absolute;
             left: 41.5%;
             top: 215px;
             font-size: 10px;
             color: #ff0000;
             letter-spacing: .25px;
         }
 
         .email_error {
             position: absolute;
             left: 41.5%;
             top: 440px;
             font-size: 10px;
             color: #ff0000;
             letter-spacing: .25px;
         }
     </style>
 </head>
 
 <body class="fix-header fix-sidebar card-no-border">  
    
     <div id="main-wrapper">
        
         <?php
          error_reporting(0);
          include('../header.php'); ?>
       
    <div class="content_section">
-     <div class="container">
-        <div class="addwebsiet">
-            <div class="row">
-                <div class="col s12 l12 title">
-                    <h2 class="text-themecolor">Accept Guest Post? Submit Your Website Here.</h2>
-                </div>
-                <!-- Tab panes -->
-                        <div class="card-body">
-                            <form class="form-horizontal form-material" id="domainForm" name="domain">
-                                <div class="form-group">
-                                    <label class="col s12 l12">Website</label>
-                                    <div class="col s12 l12">
-                                        <input type="text" name="Domain" class="form-control form-control-line">
-                                    </div>
-                                </div>
-                                <div class="form-group">
-                                    <label for="example-email" class="col s12 l12">Guideline URL</label>
-                                    <div class="col s12 l12">
-                                        <input type="text" name="Guideline_URL" class="form-control form-control-line"
-                                            id="example-email">
-                                    </div>
-                                </div>
-                                <div class="form-group">
-                                    <label class="col s12 l12">First Name</label>
-                                    <div class="col s12 l12">
-                                        <input type="text" name="FirstName" class="form-control form-control-line">
-                                    </div>
-                                </div>
-                                <div class="form-group">
-                                    <label class="col s12 l12">Last Name</label>
-                                    <div class="col s12 l12">
-                                        <input type="text" name="LastName" class="form-control form-control-line">
-                                    </div>
-                                </div>
-                                <div class="form-group">
-                                    <label class="col s12 l12">Email</label>
-                                    <div class="col s12 l12">
-                                        <input type="email" name="Email" class="form-control form-control-line">
-                                    </div>
-                                </div>         
-
-                                 <input type="hidden" name="Prospected_By" value="Direct_User">                    
-
-                                <div class="form-group">
-                                    <div class="col s12 l12">
-                                    <input type="hidden" name="submit" value="">
-                                        <button type="button" class="btn btn-primary"
-                                            onclick="add_website()">Add</button>
-                                        <label id="updatemsg"></label>
-                                    </div>
-                                </div>
-                            </form>
+        <div class="container">
+            <div class="addwebsiet">
+                <div class="row">
+                    <div class="col-12 title">
+                        <h2 class="text-themecolor">Accept Guest Post? Submit Your Website Here.</h2>
+                    </div>
+                    <!-- Tab panes -->
+                    <form class="form-horizontal form-material" id="domainForm" name="domain">
+                        <div class="form-group">
+                            <label class="col-12">Website</label>
+                            <div class="col-12">
+                                <input type="text" name="Domain" class="form-control form-control-line">
+                            </div>
+                        </div>
+                        <div class="form-group">
+                            <label for="example-email" class="col s12 l12">Guideline URL</label>
+                            <div class="col-12">
+                                <input type="text" name="Guideline_URL" class="form-control form-control-line"
+                                    id="example-email">
+                            </div>
+                        </div>
+                        <div class="form-group">
+                            <label class="col-12">First Name</label>
+                            <div class="col-12">
+                                <input type="text" name="FirstName" class="form-control form-control-line">
+                            </div>
+                        </div>
+                        <div class="form-group">
+                            <label class="col-12">Last Name</label>
+                            <div class="col-12">
+                                <input type="text" name="LastName" class="form-control form-control-line">
+                            </div>
+                        </div>
+                        <div class="form-group">
+                            <label class="col-12">Email</label>
+                            <div class="col-12">
+                                <input type="email" name="Email" class="form-control form-control-line">
+                            </div>
+                        </div>         
+
+                         <input type="hidden" name="Prospected_By" value="Direct_User">                    
+
+                        <div class="form-group">
+                            <div class="col-12">
+                            <input type="hidden" name="submit" value="">
+                                <button type="button" class="btn"
+                                    onclick="add_website()">Add</button>
+                                <label id="updatemsg"></label>
+                            </div>
                         </div>
+                    </form>     
                 </div>
             </div>
         </div>
     </div>
         <!-- ============================================================== -->
         <?php include('../footer.php') ?>
         <?php include('user_js.php'); ?>
 
         <script>
     function domain_url() {
         var form = document.domain;
         if (form.domain.value == "") {
             alert("Enter WebSite URL");
             return false;
         } else if (form.Guideline_URL.value == "") {
             alert("Enter Guideline URL ");
             return false;
         }
     }
 
     function add_website() {
         $.ajax({
             type: 'post',
             url: 'add-website.php',
             data: $('#domainForm').serialize(),
             success: function() {
                 $("#updatemsg").html("Added");
                 setTimeout(() => {
                     $("#updatemsg").html("");
                 }, 5000);
             }
         });
     };
 </script>
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
 
     </div>
 </body>
 
 </html>