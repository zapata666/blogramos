<?php 	
		$host = 'localhost';
		$dbname='blog';
		$user = 'root';
		$password='';
define('RUTA', 'http://localhost/blog/');

try{
	/*MYSQL Con PDO*/
	$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo $e->getMessage();
}
 ?>