<?php
$dbname="messenger";
$conn=new mysqli("localhost","root","",$dbname);
if($conn->connect_error)
{
    die("failed connection".$conn->connection_error);
}
echo"connection successfully";

?>