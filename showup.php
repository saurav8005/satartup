<!doctype html>
<html>
<head>
<title>show page</title>
</head>
<body>
<table border=4px; width=100%>

<th>id</th><th>first_name</th><th>last_name</th><th>password</th><th>email_id</th><th>Department</th><th>Edit</th><th>Delete</th>



<h1><?php echo date("d/m/Y");  ?></h1>

<?php
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
$sql = "SELECT *FROM registration_form";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))	{
	    echo"<tr><td>".$row['id'];
        echo"<td>".$row['first_name'];
        echo"<td>".$row['last_name'];
       echo"<td>".$row['password'];
        echo"<td>".$row['email_id'];
		echo"<td>".$row['Department'];
		echo"<th><a href='edit.php?first_name=$row[first_name]'>Edit</a></th>";
		echo"<th><a href='delete.php?first_name=$row[first_name]'>Delete</a></th>";
 
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>




















