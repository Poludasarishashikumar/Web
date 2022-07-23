<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
	die('CONNECTION FAILED!'.mysqli_connect_error());
}
$sql="create database newdb";
if(mysqli_query($conn,$sql))
{
	echo "Database created";
}
else
{
	echo mysqli_error($conn);
}
?>