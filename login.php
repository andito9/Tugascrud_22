<?php
	
	session_start();
	if(isset($_SESSION['username'])){
		header('location : index.php');
	}
	require_once("koneksi.php");
?>

<DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	
	<body>
		
	<form method="POST" action="proseslogin.php">
	<table>
	<tr>
		<td><span>Username </span></td>
		<td><input type="text" name="username"></td>
	</tr>
		<td><span>Password</span></td>
		<td><input type="password" name="password"></td>
	
	<tr>
		<td></td>
		<td><button type ="submit" name="submit">Done</button></td>
	</tr>
	</form>
	</table>
	</body>
	

</html>
