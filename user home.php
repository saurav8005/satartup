<?php
 include_once '../include/class.user.php';
 error_reporting(0);
 session_start();
 $user = new User();
 $result="";
 $queryCount = 0;
 if ($_SESSION['login'] == 1) {
     $result = $user->getUserSearchData();
     $queryCount = mysqli_num_rows($result);
 } else {
     header("location:/signin");
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <title>List of 1841 Websites that accept Guest Blogs - by GuestPostEngine</title>
     <meta name="description" content="Get an Access to the World's Largest Database of 1807 Websites that accept Guest Post on their Blog. Now generate Quality Backlinks for better Rankings in Search Engines like Google and Bing.">
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <?php include('custom_style.php'); ?>    
 </head>
 
 <body class="fix-header fix-sidebar card-no-border">
     <div class="main_warpper"> 
 
         
         <?php include('../header.php'); ?>  
 
-     <div class="container_wrap paddig_top">       
+          
         <div class="container">
             <div class="search_query">
             <div class="row">
-                <div class="row">
-                    <div class="col s12 m12">
-                        <h2 class="total_quer text-themecolor">Total Queries Searched:
-                            <?php echo $queryCount;?></h2>
-                      
-                        <div class="table-responsive">
-                            <table class="table">
-                                <thead>
-                                    <tr>
-                                        <th>Query</th>
-                                        <th>No. of Time Searched</th>
-                                        <th>No. of Results Shown</th>
-                                    </tr>
-                                </thead>
-                                <tbody>
-                                    <?php                           
-                                while ($row=mysqli_fetch_array($result)) {
-                              ?>
-                                    <tr>
-                                        <td>
-                                            <?php echo $row["query_string"]; ?>
-                                        </td>
-                                        <td>
-                                            <?php echo $row["query_index"]; ?>
-                                        </td>
-                                        <td>
-                                            <?php echo $row["query_results_count"]; ?>
-                                        </td>
-                                    </tr>
-                                    <?php
-                             } ?>
-                                </tbody>
-                            </table>
-                        </div>                       
-                    </div>                    
-                </div>
+                <div class="col-12">
+                    <h2 class="total_quer text-themecolor">Total Queries Searched:
+                        <?php echo $queryCount;?></h2>
+                  
+                    <div class="table-responsive">
+                        <table class="table">
+                            <thead>
+                                <tr>
+                                    <th>Query</th>
+                                    <th>No. of Time Searched</th>
+                                    <th>No. of Results Shown</th>
+                                </tr>
+                            </thead>
+                            <tbody>
+                                <?php                           
+                            while ($row=mysqli_fetch_array($result)) {
+                          ?>
+                                <tr>
+                                    <td>
+                                        <?php echo $row["query_string"]; ?>
+                                    </td>
+                                    <td>
+                                        <?php echo $row["query_index"]; ?>
+                                    </td>
+                                    <td>
+                                        <?php echo $row["query_results_count"]; ?>
+                                    </td>
+                                </tr>
+                                <?php
+                         } ?>
+                            </tbody>
+                        </table>
+                    </div>                       
+                </div>                    
             </div>
             </div>
         </div>
-    </div>
+
 
 
            
             <?php include('../footer.php'); ?>
             <?php include('user_js.php'); ?>
 
     </div>
 </body>
 
 </html>
           