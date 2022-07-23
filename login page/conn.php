<?php
$username="root";
$servername="localhost";
$password="";
$conn=new mysqli($servername,$username,$password);
if($conn->connect_error)
{
die("connection error:".$conn->connect_error);
}
$sql="create database db";
if($conn->query($sql)==TRUE)
{
	echo "database created sucessfully";
}
else
{
echo "error connecting database".$conn->error;
}
$conn->close();
?>