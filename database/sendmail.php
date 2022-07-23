<?php 
$uname=$_POST['uname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$message=$_POST['message'];
$to="poludasari268@gmail.com";
$subject="Contact";
$message=$message.Email:$email;
if(mail($to,$subject,$message))
{
echo "Thank you_for contacting us";
}
else
{
echo "Tryagain";
}
?>