<?php
	$hostname_localhost ="localhost";
	$database_localhost ="phototrack";
	$username_localhost ="root";
	$password_localhost ="";

	$localhost = mysql_connect($hostname_localhost,$username_localhost,$password_localhost)
	or
	trigger_error(mysql_error(),E_USER_ERROR);

	mysql_select_db($database_localhost, $localhost);

	$id = $_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$update = "UPDATE user SET username = '$username', password = '$password' WHERE id = '$id'";
	
	$query_exec = mysql_query($update) 
	or 
	die(mysql_error());

?>