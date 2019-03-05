<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<head><title> Student Management System</title></head>
<style>
body {
    background-image: url("w1.jpg");
}
h1 {
    color: white;
    text-align: center;
}
div {
    width:400px;
    margin: auto;
    
}
input{
width:40%;

}





</style>

<body>

<h1>Student Login </h1>


<div
<div>
<form ng-app="myApp" method="POST" action="" ng-controller="validateCtrl" 
name="myForm" novalidate>

<p>Username:<br>
<input type="text" name="user" ng-model="user" required>
<span style="color:red" ng-show="myForm.user.$dirty && myForm.user.$invalid">
<span ng-show="myForm.user.$error.required">Username is required.</span>
</span>
</p>

<p>Password:<br>
<input type="password" name="password" ng-model="password" required>
<span style="color:red" ng-show="myForm.password.$dirty && myForm.password.$invalid">
<span ng-show="myForm.password.$error.required">Password is required.</span>
</span>
</p>

<p>
<input type="submit" name="submit" value="Login"
ng-disabled="myForm.user.$dirty && myForm.user.$invalid ||  
myForm.password.$dirty && myForm.password.$invalid">
</p>
<span class="psw">Forgot <a href="#">password?</a></span>
</div>
</form>
<script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    $scope.user = '';
    $scope.password = '';
});
</script>
</body>
</html>

<?php

include ("connection.php");
error_reporting(0);
?>

<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iceptl";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

	
$sql = "select *from form where Username='".$_POST['user']."' AND Password='".$_POST['password']."'"; 


 $result=mysqli_query($conn,$sql);
 mysqli_num_rows($result);
 if(mysqli_num_rows($result)>0)
 {
	  echo "<script>alert('Successfully login') </script>";
	  
	  echo"<script>window.location='registration.php'</script>";
      
 }
 
mysqli_close($con);

}

 ?>