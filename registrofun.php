<?php
include_once('conexion.php');
		$stmt = $pdo -> prepare("insert into usuario(correo,contraseña,nom_usuario,tp_usuario)
			values(:mail,:contra,:nom_us, :tp_us)");

			$stmt->bindParam(':nom_us', $nombre);
			$stmt->bindParam(':contra', $contraseña);
			$stmt->bindParam(':tp_us', $tipo);
			$stmt->bindParam(':mail', $mail);

			$nombre = $_POST['nombre'];
			$contraseña = $_POST['contrasena'];
			$tipo = 0;
			$mail = $_POST['correo'];
			$stmt -> execute();
			header('Location: '.RUTA.'index.php');
?>
