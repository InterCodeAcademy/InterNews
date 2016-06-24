<!DOCTYPE html>
<?php
require 'database.php';
$message '';
if(!empty($_POST['email']) && ($_POST['password'])){
	//Enter the new user in the database
	$sql="INSERT INTO users (email, password) VALUES (:email, :password)";
	$stmt= $conn->prepare($sql);
	
	$stmt->bindParam(':email', $POST['email']);
	$stmt->bindParam(':password', $POST['password']);
	
	if($stmt->execute()){
		$message= 'Successfully create new user';
	}else:
		$message= 'Sorry there must have been an issue creating your account';
	}
}
?>	
<html>
<head>
	<title>Register Below</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="header">
		<a href="index.php">INTER NOTICIAS</a>
	</div>
	
	<h1>Register</h1>

	<div class="log-reg">	
		<span> or <a href="login.php">login here</a></span>
	</div>
	
	<form action="register.php" method="POST">
		<input type="inline-text" placeholder="First name" name="first name">
		<input type="inline-text" placeholder="Last name" name="Last name">
		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="and password" name="password">
		<input type="password" placeholder="confirm password" name="password">
		<input type="submit">
	</form>
	
	<?php if(!empty($message)){ ?>
		<p><?= $message ?></p>
	<?php } ?>
	
</body>
</html>
