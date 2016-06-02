<?php
require 'database,php';
if(!empty($_POST['email']) && ($_POST['password'])):
	//Enter the new user in the database
	$sql="INSERT INTO users (email, password) VALUES (:email, :password)";
	$stmt= $conn->prepare($sql);
	
	$stmt->bindParam(':email', $POST['email']);
	$stmt->bindParam(':password', $POST['password']);
	
endif;
?>
<html>
<head>
	<title>Register Below</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="header">
		<a href="index.php">INTER</a>
	</div>
	
	<h1>Register</h1>
	
	<span> or <a href="login.php">Login here</a></span>
	
	<form action="register.php" method="POST">
		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="and password" name="password">
		<input type="password" placeholder="confirm password" name="password">
		<input type="submit">

	</form>
	
</body>
</html>
