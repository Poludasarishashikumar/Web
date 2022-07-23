<?php

// open a file
$fp = fopen("obj.php", "r");

// gather statistics
$fstat = fstat($fp);

// close the file
fclose($fp);

// print only the associative part
print_r(array_slice($fstat, 13));

?>