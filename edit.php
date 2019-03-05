<?php
include'connection.php';
$sql = "SELECT *FROM stud where roll='".$_GET['roll_no']."'";
$result = mysqli_query($conn, $sql);
    // output data of each row
$row = mysqli_fetch_assoc($result);
;

?>
<form method="POST" action="">
<label>Roll no</label><input type="text" value="<?php echo $row['roll']; ?>" name="roll" />
<label>Sname</label><input type="text" value="<?php echo $row['sname']; ?>" name="sname" />
<input type="submit" value="Update" name="submit" />


</form>



<?php
if(isset($_POST['submit']))
{
include'connection.php';

$sql = "UPDATE stud SET sname='".$_POST['sname']."' WHERE roll='".$_POST['roll']."'";


if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Successfully Update')</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
