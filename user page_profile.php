<?php
 include_once '../include/class.user.php';
 error_reporting(0);
 session_start();
 $user = new User();
 $result="";
 $acc_status = "Not Verified";
 $profile_status = "";
 if ($_SESSION['login'] == 1) {
     // $result = $user->getUserData($_SESSION['uid']);
     $result = $user->getUserData1();
     if ($result['user_email_verified'] == 1) {
         $acc_status = "Verified";
     }
 
     $arr = ["user_fname","user_lname","user_email","user_mob_no","user_city","user_state","user_postal_code","user_whmco_pwd","user_addr", "user_country"];
 
     for ($i=0; $i<count($arr); $i++) {
         if (empty($result[$arr[$i]])) {
             // echo $arr[$i]." is required";
             $profile_status = "Please complete Your Profile";
             break;
         }
     }
 
 } else {
     header("location:/signin");
 }
 
 if (isset($_POST['editBtn'])) {
     $email = $_POST['email'];
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $mobile = $_POST['mobile'];
     $addr = $_POST['addr'];
     $city = $_POST['city'];
     $state = $_POST['state'];
     $country = $_POST['country'];
     $postcode = $_POST['postcode'];
     $whmcopwd = $_POST['user_whmco_pwd'];
     $user = new User();
     $res = $user->updateMyProfile1($fname, $lname, $email, $mobile, $addr, $city, $state, $country, $postcode,  $whmcopwd);
     echo $res;
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
 
         <?php include('../header.php');?>
         <!-- End Topbar header -->
        
         <!-- Page wrapper  -->
         <!-- ============================================================== -->
         <div class="content_section">
             <!-- ============================================================== -->
-            <!-- Container fluid  -->
-            <!-- ============================================================== -->
-            <div class="container-fluid">
                 <!-- ============================================================== -->
                 <!-- Bread crumb and right sidebar toggle -->
                 <!-- ============================================================== -->
                 <div class="container">
                     <div class="row page-titles profile_page">
-                        <div class="col s12 m6">
+                        <div class="col-12 col-sm-6">
                             <h2 class="text-themecolor">Profile</h2>
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                 <li class="breadcrumb-item active">Profile</li>
                             </ol>
                         </div>
-                        <div class="col s12 m6 subscribe_btn">
-                            
+                        <div class="col-12 col-sm-6 subscribe_btn">
                             <div class="sub_grup">
-                                
-                            
                             <span>
                                 <?php
                             if($profile_status == ""){
 
                             }else{
                                 echo $profile_status;
                             }
                             ?>
                         </span>
                         <button onclick="subscribe()" <?php if($profile_status != "") echo "disabled"?>>Subscribe</button>
                         </div>
                         </div>
                     </div>
                 </div>
                
                 <!-- Start Page Content -->
                 <!-- ============================================================== -->
                 <!-- Row -->
-                <div class="container">
+                <div class="container mt-3">
                     <div class="row user_profile">
                         <!-- Column -->
-                        <div class="col s12 m4 l3">
-                       
-                                <div class="card-body">
-                                    <div class="m-t-30"> <img src="./assets/images/users/5.jpg" class="img-circle"
-                                            width="150" />
-                                        <h4 class="card-title m-t-10"><?php echo $result['user_fname']?>
-                                            <?php echo $result['user_lname']?>
-                                        </h4>
-                                    </div>
-                                </div>
-                         
+                        <div class="col-12 col-md-3 profile-section">
+                            <img src="https://www.w3schools.com/w3images/avatar5.png" class="img-circle" width="150" alt=""/>
+                            <h4 class="card-title m-t-10"><?php echo $result['user_fname']?>
+                                <?php echo $result['user_lname']?>
+                            </h4>
                         </div>
                         <!-- Column -->
                         <!-- Column -->
-                        <div class="col s12 m8 l9">
-                      
-                                <!-- Tab panes -->
-                                <div class="card-body">
-                                    <form class="form-horizontal form-material" id="profileForm">
-                                        <div class="form-group">
-                                            <div class="col s6 l6">
-                                                <label>Account Status</label>
-                                                <label class="verifd" style="color: #00bfff"> <?php echo $acc_status;?></label>
-                                                <input type=hidden name="editBtn" value="">
-                                            </div>
-                                           
-                                        </div>
-                                        <div class="form-row">
-
-                                            <div class="form-group col s12 l6" style="padding-left: 0;">
-                                                <label class="col s12 l6">First Name</label>
-                                                <div class="col s12 l12">
-                                                    <input type="text" placeholder="Johnathan Doe"
-                                                        class="form-control form-control-line" name="fname"
-                                                        value="<?php echo $result['user_fname']?>">
-                                                </div>
-                                            </div>
-                                            <div class="form-group col s12 l6">
-                                                <label class="col-md-12">Last Name</label>
-                                                <div class="col-md-12">
-                                                    <input type="text" placeholder="Johnathan Doe"
-                                                        class="form-control form-control-line" name="lname"
-                                                        value="<?php echo $result['user_lname']?>">
-                                                </div>
-                                            </div>
-                                        </div>
-
-
-
-                                        <div class="form-group">
-                                            <label for="example-email" class="col s12 l12">Email</label>
-                                            <div class="col s12 l12">
-                                                <input type="email" placeholder="webdew@admin.com"
-                                                    class="form-control form-control-line" name="email"
-                                                    id="example-email"
-                                                    value="<?php echo $result['user_email']?>">
-                                            </div>
+                        <div class="col-12 col-md-9">
+                            <!-- Tab panes -->
+                            <form class="form-horizontal form-material" id="profileForm">
+                                <div class="form-group">
+                                    <div class="col-12 account-status">
+                                        <label>Account Status</label>
+                                        <label class="verifd" style="color: #00bfff"> <?php echo $acc_status;?></label>
+                                        <input type=hidden name="editBtn" value="">
+                                    </div>
+                                   
+                                </div>
+                                <div class="form-row">
+                                    <div class="form-group col-12 col-md-6">
+                                        <label class="col-12">First Name</label>
+                                        <div class="col-12">
+                                            <input type="text" placeholder="Johnathan Doe"
+                                                class="form-control form-control-line" name="fname"
+                                                value="<?php echo $result['user_fname']?>">
                                         </div>
-                                        <div class="form-group">
-                                            <label class="col s12 l12">Phone No</label>
-                                            <div class="col s12 l12">
-                                                <input type="text" placeholder="123 456 7890" name="mobile"
-                                                    class="form-control form-control-line"
-                                                    value="<?php echo $result['user_mob_no']?>">
-                                            </div>
+                                    </div>
+                                    <div class="form-group col-12 col-md-6">
+                                        <label class="col-12">Last Name</label>
+                                        <div class="col-12">
+                                            <input type="text" placeholder="Johnathan Doe"
+                                                class="form-control form-control-line" name="lname"
+                                                value="<?php echo $result['user_lname']?>">
                                         </div>
+                                    </div>
+                                </div>
+                                <div class="form-group">
+                                    <label for="example-email" class="col-12">Email</label>
+                                    <div class="col-12">
+                                        <input type="email" placeholder="webdew@admin.com"
+                                            class="form-control form-control-line" name="email"
+                                            id="example-email"
+                                            value="<?php echo $result['user_email']?>">
+                                    </div>
+                                </div>
+                                <div class="form-group">
+                                    <label class="col-12">Phone No</label>
+                                    <div class="col-12">
+                                        <input type="text" placeholder="123 456 7890" name="mobile"
+                                            class="form-control form-control-line"
+                                            value="<?php echo $result['user_mob_no']?>">
+                                    </div>
+                                </div>
 
-                                        <div class="form-group">
-                                            <label class="col s12 l12">Address</label>
-                                            <div class="col s12 l12">
-                                                <input type="text" placeholder="123 456 7890" name="addr"
-                                                    class="form-control form-control-line"
-                                                    value="<?php echo $result['user_addr']?>">
-                                            </div>
-                                        </div>
+                                <div class="form-group">
+                                    <label class="col-12">Address</label>
+                                    <div class="col-12">
+                                        <input type="text" placeholder="123 456 7890" name="addr"
+                                            class="form-control form-control-line"
+                                            value="<?php echo $result['user_addr']?>">
+                                    </div>
+                                </div>
 
-                                        <div class="form-group">
-                                            <label class="col s12 l12">City</label>
-                                            <div class="col s12 l12">
-                                                <input type="text" placeholder="123 456 7890" name="city"
-                                                    class="form-control form-control-line"
-                                                    value="<?php echo $result['user_city']?>">
-                                            </div>
-                                        </div>
+                                <div class="form-group">
+                                    <label class="col-12">City</label>
+                                    <div class="col-12">
+                                        <input type="text" placeholder="123 456 7890" name="city"
+                                            class="form-control form-control-line"
+                                            value="<?php echo $result['user_city']?>">
+                                    </div>
+                                </div>
 
-                                        <div class="form-group">
-                                            <label class="col s12 l12">State</label>
-                                            <div class="col s12 l12">
-                                                <input type="text" placeholder="123 456 7890" name="state"
-                                                    class="form-control form-control-line"
-                                                    value="<?php echo $result['user_state']?>">
-                                            </div>
-                                        </div>
+                                <div class="form-group">
+                                    <label class="col-12">State</label>
+                                    <div class="col-12">
+                                        <input type="text" placeholder="123 456 7890" name="state"
+                                            class="form-control form-control-line"
+                                            value="<?php echo $result['user_state']?>">
+                                    </div>
+                                </div>
 
-                                        <div class="form-group">
-                                            <label class="col s12 l12">Country</label>
-                                            <div class="col s12 l12">
-                                            <select name ="country">
-                                             <?php 
-                                             $countrylist = $user->getCountries();
-                                              while($country = $countrylist->fetch_array(MYSQLI_ASSOC))
-                                              { ?>
-                                             <option value="<?php echo $country['country_code'] ?>" class="form-control" name ="country">
-                                                   <?php echo $country['country_name'] ?>
-                                            </option>
-                                        <?php }?>
-                                            </select>
-                                            </div>
-                                        </div>
+                                <div class="form-group">
+                                    <label class="col-12">Country</label>
+                                    <div class="col-12">
+                                    <select name ="country" class="form-control">
+                                     <?php 
+                                     $countrylist = $user->getCountries();
+                                      while($country = $countrylist->fetch_array(MYSQLI_ASSOC))
+                                      { ?>
+                                     <option value="<?php echo $country['country_code'] ?>" class="form-control" name ="country">
+                                           <?php echo $country['country_name'] ?>
+                                    </option>
+                                <?php }?>
+                                    </select>
+                                    </div>
+                                </div>
 
-                                        <div class="form-group">
-                                            <label class="col s12 l12">Postcode</label>
-                                            <div class="col s12 l12">
-                                                <input type="text" placeholder="123 456 7890" name="postcode"
-                                                    class="form-control form-control-line"
-                                                    value="<?php echo $result['user_postal_code']?>">
-                                            </div>
-                                        </div>
+                                <div class="form-group">
+                                    <label class="col-12">Postcode</label>
+                                    <div class="col-12">
+                                        <input type="text" placeholder="123 456 7890" name="postcode"
+                                            class="form-control form-control-line"
+                                            value="<?php echo $result['user_postal_code']?>">
+                                    </div>
+                                </div>
 
-                                        <input type="hidden" name="user_whmco_pwd"
-                                                    class="form-control form-control-line" value="Webdew">
-                                        <div class="form-group">
-                                            <div class="col s12 l12">
-                                                <button type="button" class="btn btn-success"
-                                                    onclick="submit_profile()">Update Profile</button>
-                                                <label id="updatemsg"></label>
-                                            </div>
-                                        </div>
-                                    </form>
-                           
-                            </div>
+                                <input type="hidden" name="user_whmco_pwd"
+                                            class="form-control form-control-line" value="Webdew">
+                                <div class="form-group">
+                                    <div class="col-12">
+                                        <button type="button" class="btn"
+                                            onclick="submit_profile()">Update Profile</button>
+                                        <label id="updatemsg"></label>
+                                    </div>
+                                </div>
+                            </form>
                         </div>
                         <!-- Column -->
                     </div>
                 </div>
                 <!-- Row -->
                 <!-- ============================================================== -->
                 <!-- End PAge Content -->
                 <!-- ============================================================== -->
-            </div>
-            <!-- ============================================================== -->
-            <!-- End Container fluid  -->
             <!-- ============================================================== -->
             <!-- ============================================================== -->
             <!-- footer -->
             <!-- ============================================================== -->
         
             <?php include('../footer.php'); ?>
             <?php include('user_js.php'); ?>
 
     </div>
 </body>
 
 </html>