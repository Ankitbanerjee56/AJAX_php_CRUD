<?php 
	include "config.php";
	$uid=$_POST["uid"];
	$name=mysqli_real_escape_string($con,$_POST["name"]);
	$email=mysqli_real_escape_string($con,$_POST["email"]);
	$mobile=mysqli_real_escape_string($con,$_POST["mobile"]);
	if($uid=="0"){
		$sql="insert into user (NAME,EMAIL,MOBILE) values ('{$name}','{$email}','{$mobile}')";
		if($con->query($sql)){
			$uid=$con->insert_id;
			echo"<tr class='{$uid}'>
				<td>{$name}</td>
				<td>{$email}</td>
				<td>{$mobile}</td>
				<td><a href='#' class='btn btn-primary edit' uid='{$uid}'>Edit</a></td>
				<td><a href='#' class='btn btn-danger del' uid='{$uid}'>Delete</a></td>					
			</tr>";
			
		}
	}else{
		$sql="update user set NAME='{$name}',EMAIL='{$email}',MOBILE='{$mobile}' where UID='{$uid}'";
		if($con->query($sql)){
			echo"
				<td>{$name}</td>
				<td>{$email}</td>
				<td>{$mobile}</td>
				<td><a href='#' class='btn btn-primary edit' uid='{$uid}'>Edit</a></td>
				<td><a href='#' class='btn btn-danger del' uid='{$uid}'>Delete</a></td>					
			";
		}
	}
?>