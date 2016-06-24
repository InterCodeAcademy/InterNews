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
	<title>Inicia Sesion</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="header">
		<a href="index.php">NOTICIAS INTER</a>
	</div>	
	
	<h1>Inicia Sesion</h1>
	
	<div class="log-reg">
		<span> o <a href="register.php">registrate aqui.</a></span>
	</div>
	
	<form action="login.php" method="POST">
		<input type="text" placeholder="Correo electronico" name="email">
		<input type="password" placeholder="Contrasena." name="password">
		<input type="submit" value="Iniciar Sesion">

	</form>
	
	<?php if(!empty($message)){ ?>
		<p><?php= $message ?></p>
	<?php } ?>
</body>
</html>
