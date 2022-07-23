<html>
<body>
<?php
$username= $_POST["n1"];
$pass=$_POST["e1"];
if($pass==NULL)
{
	echo "password is empty.please enter your password!";
}
else
{
	echo " welcome ",$username;
}
?>
</body>
</html>
