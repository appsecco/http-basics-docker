<?php
error_reporting(0);
if(isset($_POST['fname'])){
	echo "Hello ".$_POST['fname']." ".$_POST['lname']."!"."\n";
}else{
	echo "POST not set :(";
}
?>
