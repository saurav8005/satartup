<?php
$q=$_GET[''];
$con = mysqli_connect('localhost','root', "",'student');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


mysqli_select_db($con,"student");
$sql="SELECT * FROM courses_fee WHERE courses= '".$q."'";
$result = mysqli_query($con,$sql);

 $row = mysqli_fetch_assoc($result);
echo $row['fee'];

?>