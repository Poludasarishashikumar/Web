<?php
$branch=array("1"=>"civil","2"=>"eee","3"=>"mech","4"=>"ece","5"=>"cse");
foreach($branch as $k=>$value)
{
	echo "branchcode=",$k;
	echo "		BranchName=",$value;
	echo "<br>";
}
?>