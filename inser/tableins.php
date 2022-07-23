<?php
$conn=mysqli_connect('servletname,"username",password",databasename');
if(!conn)
{
die('connection failed!'.mysqli_error($conn));
}
$sql="INSERT INTO student('sno,"name",pwd') VALUES('101,"Surya",surya123')";
if(mysqli_query($conn,$sql))
{
echo "record inserted";
}
else
{
echo mysql_error();
}
?>