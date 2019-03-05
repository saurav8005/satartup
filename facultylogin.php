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

<h1>Faculty Login </h1>


<div
<div>
<form ng-app="myApp" ng-controller="validateCtrl" 
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
<input type="submit" value="Login"
ng-disabled="myForm.user.$dirty && myForm.user.$invalid ||  
myForm.password.$dirty && myForm.password.$invalid">
</p>
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