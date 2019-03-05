<table border="1" width=100%>
<th>Roll No</th><th>Sname</th><th>Edit</th>
<?php
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
$sql = "SELECT *FROM stud";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo"<tr><td>".$row['roll'];
        echo"<td>".$row['sname'];
        echo"<td><a href='edit.php?roll_no=$row[roll]'>Edit</a></td>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>