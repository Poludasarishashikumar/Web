<html>
<body>
<? php
$myfile=fopen("pro1.html","w") or die("Unable to open file!");
$txt="PHP Extension\n";
fwrite($myfile,$txt);
$txt="form\n";fwrite($myfile,$txt);
$txt="hello world\n";fwrite($myfile,$txt);
fclose($myfile);
echo "Size of the file".filesize("pro1.html")."\n";
?>
</body>
</html>