<?php

include ("connection.php");
error_reporting(0);
?>
<!doctype html>
<html>
<body>

<form method="post" action="">
Firstname:
<input type="text" name="firstname" value=""><br/> 
Lastname:
<input type="text" name="lastname" value=""><br/>
password:
<input type="password" name="password" value=""><br/>
email:
<input type="email" name="email" value=""><br
department:
<input type="text" name="department" value=""><br
<input type="submit" name="submit" value="submit">
</form>
</body>
</html> 
<?php
if($_post['submit'])
{
$firstname=$_post['firstname'];

$lastname=$_post['lastname'];
$password=$_post['password'];
$email=$_post['email'];
$department=$_post['department'];
if($firstname!="" && $lastname!="" && $password!="" && $email! && $department!)
{
$query="insert into registration_form values('$firstname' '$lastname' '$password' '$email' '$department')";
$data=mysqli_query($conn $query);
if($data){
echo"data inserted in to database";
}
}
else
{
echo"all field are required";
?>