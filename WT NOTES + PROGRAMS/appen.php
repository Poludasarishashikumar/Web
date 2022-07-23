<?php
$handle=fopen("data.txt","a");
$text="\nHere\nis\nmore\ntext.";
if(fwrite($handle))