<?php
session_start();
if($_SESSION['uname']=="")
{
echo"<script>window.location='adminlogin.php'</script>";

}

?>

<h1> Dashboard    </h1><p><a href='logout.php'>Logout</a>