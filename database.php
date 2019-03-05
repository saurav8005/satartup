<form method="POST" action="">
<input type="text" name="db" />
<input type="submit" name="submit" />


</form>


<?php
if(isset($_POST['submit']))
{
$db_name=$_POST['db'];
$servername = "localhost";
$username = "root";
$password = "";
echo $db_name;
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE $db_name";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>