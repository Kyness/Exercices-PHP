<?php 
$host = "localhost";
	$dbname = "mailinglist";
	$user = "root";
	$password = "";

	session_start();
	try{
		$dns = "mysql:host=$host;dbname=$dbname;charset=utf8";
		$connexion = new PDO($dns, $user, $password);
	}catch(PDOException $e){
		echo $e->getMessage();
	}
