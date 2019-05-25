<?php
	$server='localhost';
	$username='root';
	$password='';
	$database='shopping';
	
	$conn=mysqli_connect($server,$username,$password,$database) or die('can not connect');
	mysqli_select_db($conn,"shopping");

	
	session_start();
?>