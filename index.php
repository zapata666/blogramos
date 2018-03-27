<?php 
session_start();

if (isset($_SESSION['login'])) {
	echo 'haz iniciado session   '.$_SESSION['login'];
}
else{
	echo 'sin session';
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inio de sesion</title>
</head>
<body>
		<h1>Hola Mundo aki el nuevo blog vAandhitHap</h1>
				<form method="post" action="login.php">
					usuario: <input type="text" name="username"><br><br>
					contraseña: <input type="password" name="password"><br>
					<input type="submit" name="submit"><br>
				</form>
<div name="publicaciones">
	
</div>
</body>
</html>