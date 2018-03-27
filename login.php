<?php 
$users="zapata";
$pass="081013";

session_start();

if ($_POST['username']== $users && $_POST['password']==$pass) {
	$_SESSION['login']='   administrador';
	echo 'session iniciada';
	
}
else{
	echo 'usuario o contraseña erronea';
}


 ?>