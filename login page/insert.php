<?php
$servername="localhost";
$username="root";
$password="";
$dbname="db";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed: ".$conn->connect_error);}
$sql="insert into student(id,name,age,class) values (01,'kumar',19,'second')";
if($conn->query($sql)===TRUE)
{
echo "inserted sucessfully";
}
else
{
echo "error ".$sql."<br>".$conn->error;
}
$conn->close();
?>
