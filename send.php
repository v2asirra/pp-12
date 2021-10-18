<?php
session_start();
require("connection.php");

$username=$_SESSION["username"];
$msg=$_POST['messege'];
$sql="INSERT INTO `messege` (`username`, `messege`) VALUES ('$username','$msg')";
$result=mysqli_query($conn,$sql);
if ($result)
{
    header("location:home.php?send=success");
}
else {
    header("location:home.php?send=failed");
}
mysqli_close($conn);
?>