
<!--<form action="" method="post">

            ID TO DELETE:&nbsp;<input type="text" name="first_name" required><br><br>

            <input type="submit" name="delete" value="Clear Data">

        </form>--!>


<?php
if(isset($_GET['first_name']))
{
include'connection.php';
$sql = "DELETE FROM registration_form WHERE first_name='".$_GET['first_name']."'";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Successfully Delete')</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

}
?>
