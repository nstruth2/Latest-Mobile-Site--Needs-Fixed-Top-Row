<?php
	$servername = "localhost";
	$username = "user";
	$password = "secret";
	$dbname="school";
	try{ 
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
	//Set PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Failed to connect". $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
}
?>
