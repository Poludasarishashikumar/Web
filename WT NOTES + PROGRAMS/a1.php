<?php
$servername="localhost";
$username="root";
$password="";
$database="mydb";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
	die("sorry we failed to connect: ".mysqli_connect_error());
}
echo "connected sucessfull";
$sql="create table student(name char(20),id int(10),branch char(20));";
if(mysqli_query($conn,$sql))
{
	echo "table created sucessfully";
}
else
{
	echo "error creating table",mysqli_error($conn);
}
?>