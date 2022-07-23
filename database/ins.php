<?php
$servername="localhost";
$username="root";
$password="";
$dbname="newdb";
header("content-type:image/jpeg");
mysql_connect($servername,$username,$password);
mysql_select_db($dbname);
$sql="select * from student;";
$data=mysql_query($sql);
while($rec=mysql_fetch_row($data))
{
echo "$rec[1]<br>";
} ?>