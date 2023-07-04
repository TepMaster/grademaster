<?php
	$host = 'localhost';
	$db = 'tepservio';
	$username = 'marcu';
	$pwd = 'QAZ123qaz';
	$dns = "mysql:host=$host;dbname=$db";
	
	try {
		$conn = new PDO($dns, $username, $pwd);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e) {
		echo "connection failed: ".$e->getMessage();
	}
?>
