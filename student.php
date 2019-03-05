<form method="POST" action="">
<label>Roll no</label><input type="text" name="roll" />
<label>Sname</label><input type="text" name="sname" />
<input type="submit" value="insert" name="submit" />


</form>



<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO stud (roll, sname)
VALUES ('".$_POST['roll']."','".$_POST['sname']."')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Successfully Save')</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
