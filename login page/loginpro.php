<?php 
$uid=$_POST['uid'];
$pw=$_POST['n2'];
if($uid=='shashi' and $pw=='shashikumar')
{
	session_start();
	$_SESSION['sid']=session_id();
	header("location:securepage.php");
}
?>