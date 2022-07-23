<?php
$servername="localhost";
$username="root";
$password="";
$dbname="newdb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die('CONNECTION FAILED!'.mysqli_connect_error());
}
$sql="use newdb";
$sql="create table student(rollno int(20),name char(20),age int(20)) values(34,'kumar',19)";

if(mysqli_query($conn,$sql))
{
	echo "inserted";
}
else
{
	echo mysqli_error($conn);
}
?>
