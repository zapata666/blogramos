<?php
	$host = 'localhost';
	$dbname = 'clasePDO';
	$user = 'root';
	$password = '';
try{
	/*MYSQL Con PDO*/
	$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo $e->getMessage();
}
/*
$stmt = $pdo -> prepare("INSERT INTO users(username, pass, status) VALUES ('4ndr3yp00t','4AKILL',1)");
$stmt->execute();
$stmt2 = $pdo -> prepare("SELECT * FROM users");
$stmt2->execute*/


///QUERY
///$insertados = $pdo->query("INSERT INTO users(username, pass, status) VALUES ('d34l3r','4AKILL',1)");
///$borrar = $pdo->query("DELETE FROM users WHERE username='4ndr3yp00t'");

///PREPARE
//Marcadores anónimos
///$stmt = $pdo-> prepare("INSERT INTO users (username, pass, status) VALUES (?,?,?)");
//Marcadores conocidos 
$stmt = $pdo-> prepare("INSERT INTO users (username, pass, status) VALUES (:user,:password,:sts)");

///BIND
$stmt->bindParam(':user', $user);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':sts', $sts);

//Excecute (insert)
$user = 'Andrey';
$password = '123';
$sts = 1;
$stmt->execute();

$pdo = null;
?> 