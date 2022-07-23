<html>
<body>
<p color="green">
<?php
$n=2;
while($n<50)
{
	$count=0;
for($i=1;$i<=$n;$i++)
{
	if(($n%$i)==0)
	{
	$count++;	
	}
}
if($count<3)
{
	echo $n.",";
}
$n=$n+1;
}
?>
</p>
</body>
</html>