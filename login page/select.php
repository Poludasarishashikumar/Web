<?php
$servername="localhost";
$username="root";
$password="";
$dbname="db";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed: ".$conn->connect_error);}
$sql="select * from student";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "ROLLNO: ".$row["id"]."<br>"."NAME: ".$row["name"]."<br>"."AGE: ".$row["age"]."<br>"."CLASS: ".$row["class"]."<br>";}
}
else
{
echo "0 results";
}
$conn->close();
?>
