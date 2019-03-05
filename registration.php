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

<h1>Registration Form </h1>



<div>
<form ng-app="myApp" method="POST" action="" ng-controller="validateCtrl" 
name="myForm" novalidate>



<p>Firstname:<br>
<input type="text" name="user" ng-model="user" required>
<span style="color:red" ng-show="myForm.user.$dirty && myForm.user.$invalid">
<span ng-show="myForm.user.$error.required">Firstname is required.</span>
</span>
</p>

<p>Lastname:<br>
<input type="text" name="name" ng-model="name" required>
<span style="color:red" ng-show="myForm.name.$dirty && myForm.name.$invalid">
<span ng-show="myForm.name.$error.required">Lastname is required.</span>
</span>
</p>

<p>Password:<br>
<input type="password" name="password" ng-model="password" required>
<span style="color:red" ng-show="myForm.password.$dirty && myForm.password.$invalid">
<span ng-show="myForm.password.$error.required">Password is required.</span>
</span>
</p>
 
<p>Email:<br>
<input type="email"  name="email" ng-model="email" required>
<span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
<span ng-show="myForm.email.$error.required">Email is required.</span>
<span ng-show="myForm.email.$error.email">Invalid email address.</span>
</span>
</p>
<p>Select your course: </p>
<select name="Course" >
<option ng-repeat="x in names">{{x}}</option>
</select>
<p>Department<br>
<input type="text" name="department" ng-model="department" required>
<span style="color:red" ng-show="myForm.department.$dirty && myForm.department.$invalid">
<span ng-show="myForm.department.$error.required">Department is required.</span>
</span>
</p>
<p>
<input type="submit" name="submit" ng-disabled="myForm.user.$invalid "> 
</p>
</div>
</form>
<script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    $scope.user = '';
	$scope.name ='';
    $scope.email = '';
	$scope.password='';
	$scope.names = ["Java", "Web Development","C and C++"];
});
</script


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
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO registration_form (id,first_name,last_name,password,email_id,Course,Department)
VALUES ('".$_POST['id']."','".$_POST['user']."','".$_POST['name']."','".$_POST['password']."','".$_POST['email']."','".$_POST['Course']."','".$_POST['department']."')";

}
if (mysqli_query($conn, $sql)) {
 
    echo "<script>alert('Successfully Save')</script>";
	

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


 

mysqli_close($conn);

?>