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
$sql="insert into student (name,id,branch) values('shashikumar',587,'cse');";
if(mysqli_query($conn,$sql))
{
	echo "insertion sucessfull";
}
else
{
	echo "error inserting into table",mysqli_error($conn);
}
?>