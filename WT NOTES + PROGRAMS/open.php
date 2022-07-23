<?php
$fp=fopen("trac.php","r");
if($fp==TRUE)
{
$fstat=fstat($fp);
fclose($fp);
print_r(array_slice($fstat,13));
}
else
{
	echo "no such file";
}
?>