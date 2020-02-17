<?php

$dsn = "mysql:host=localhost;dbname=reviewdb";
$user = "reviewdb_admin";
$password = "admin123";


$pdo = null;
try {

	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
	
	$pdo = new PDO($dsn, $user, $password, $options);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	
	
	
	echo $e->getMessage();
}
?>