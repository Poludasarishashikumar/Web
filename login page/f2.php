<?php
$x=76;
$y=45;
function add()
{
$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
add();
echo $z;
?>