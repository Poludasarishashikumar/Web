<?php
include 'config.php';
$data=array();
$key=$_POST["key"];
$sql="SELECT id FROM  $key";
$result=$mysql->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
array_push($data,$row);}}
$mysql->close();
echo count($data);
?>