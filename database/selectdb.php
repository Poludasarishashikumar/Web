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
if(mysqli_query($conn,$sql))
{
	echo "Database selected";
}
else
{
	echo mysqli_error($conn);
}
?>
