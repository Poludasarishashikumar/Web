<?php
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli_connect($servername,$username,$password);
if($conn->mysqli_connect_error())
{
	die("sorry we failed to connect: ".$conn->mysqli_connect_error());
}
echo "connected sucessfull";
?>