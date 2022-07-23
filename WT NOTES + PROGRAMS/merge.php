<?php
$a1=array(1,4,7,2);
$a2=array(15,2,19,13);
$num=array_merge($a1,$a2);
array_multisort($num,SORT_DESC,SORT_NUMERIC);
print_r($num);
?>