<?php
$servername="localhost";
$username="root";
$password="";
$dbname="db";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed: ".$conn->connect_error);}
$sql="create table student(id int(6),name varchar(20),age int(4),class varchar(20))";
if($conn->query($sql)===TRUE)
{
echo "table student created sucessfully";
}
else
{
echo "error creating table".$conn->close();
}
?>
