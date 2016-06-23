<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['user_id'])){
	header("index.php");
}
require 'database.php';
if(!empty($_POST['email']) && ($_POST['password'])){
	$records= $conn->prepare('SELECT id, email, password FROM users WHERE email = :email')
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message '';	

	if(cout($results) > 0 && password_verify($_POST['password'], $results['password'])){
		$_SESSION['user_id']= $results['id'];
		header("Location: index.php");
	} else{
		$message= 'Sorry, those credential dont match';
	}
}
?>	
<html>

<head>
	<title>Login Below</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
		<a href="index.php">INTER</a>
	</div>
	
	<h1>Login</h1>
	
	<span> or <a href="register.php">register here</a></span>
	
	<form action="login.php" method="POST">
		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="and password" name="password">
		<input type="submit">

	</form>
	<?php if(!empty($message)){ ?>
		<p><?php= $message ?></p>
	<?php } ?>
</body>
</html>
