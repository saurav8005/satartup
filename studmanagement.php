<!doctype html>
<html>
<head>
<title> student management</title>
<style>
h3 {
background-color: powderblue;
color: white;
border-bottom: red;
text_align: center;
}
input[type=text], select {
width: 50%;
    padding: 10px 10px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 60%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 12px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>
</head>
<body>
<h3> student management form</h3>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT *FROM id_generate";
$result = mysqli_query($conn, $sql);


 $row = mysqli_fetch_assoc($result);
 $new_id=$row['id']+1;
 $sql="update id_generate SET id ='$new_id'";

?>



<form method="post" action="">
 id:
 <input type="text" name="id" value=""<?php echo $row['id']; ?>"> <br><br>

rollno:
<input type="text" name="roll_no" value=""> <br><br>
name:
<input type="text" name="name" value=""><br><br>
email:
<input type="text" name="email" value=""><br><br>
mobileno
<input type="text" name="st_mobileno" value=""><br><br>
male:
<input type="radio" name="male" value="male"><br><br>
female:
<input type="radio" name="female" value="female"><br><br>
<input type="submit" name="submit" value="submit">

</form>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO student (id,roll_no, name,email,st_mobileno)
VALUES ('".$_POST['id']."', '".$_POST['roll_no']."','".$_POST['name']."','".$_POST['email']."','".$_POST['st_mobileno']."')";

}
if (mysqli_query($conn, $sql)) {
 
    echo "<script>alert('Successfully Save')</script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$new_id=$row['id']+1;
 $sql="update id_generate SET id ='$new_id'";
 

mysqli_close($conn);

?>






