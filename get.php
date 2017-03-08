<?php
error_reporting(0);
if(isset($_GET['fname'])){
	echo "Hello ".$_GET['fname']." ".$_GET['lname']."!"."\n";
}else{
	echo "GET not set :(";
}
?>
