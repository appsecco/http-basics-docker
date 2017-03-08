<?php
error_reporting(0);
$value=md5(rand(0,9999999999));
setcookie("swpapps", $value, time()+3600);
?>
