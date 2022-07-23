<?php
echo "Logged out sucessfully";
session_start();
session_destroy();
setcookie(PHPSESSID,session_id(),time()-1);
?>