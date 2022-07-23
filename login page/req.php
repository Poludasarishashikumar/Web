<!DOCTYPE html>
<html>
<head>
<style>
.error{color:#FF0000;}
</style>
</head>
<body>
<?php
$nameErr=$emailErr="";
$name=$email="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(empty($_POST["name"]))
{
$nameErr="Name is required";}
else
{
$name=test_input($_POST["name"]);}
if(empty($_POST["email"]))
{
$emailErr="Email is required";}
else{
$email=test_input($_POST["email"]);
}
}
function test_input($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?><h2>php form validation example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>">
name:<input type="text" name="name">
<span class="error">*<?php echo $nameErr;
?>
</span>
<br><br>
email:<input type="text" name="email">
<span class="error">*<?php
echo $emailErr; ?></span><br><br>
<input type="submit" name="submit" value="submit">
<?php
echo "<h2>your input:</h2>";
echo $name;
echo "<br>";
echo $email;
?>
</body>
</html>