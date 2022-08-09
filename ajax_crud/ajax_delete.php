<?php 
	include "config.php";
	$uid=$_POST["id"];
	$sql="delete from user where UID='{$uid}'";
	if($con->query($sql)){
		echo true;
	}else{
		echo false;
	}
?>