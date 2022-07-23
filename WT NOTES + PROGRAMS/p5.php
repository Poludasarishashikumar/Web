<html>
<body>
<?php
function least()
{
	static $x=0;
	echo $x;
	$x++;
}
least();
least();
least();
?>
</body>
</html>
