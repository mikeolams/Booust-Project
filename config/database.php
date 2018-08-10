<?php

// connet the database
$host = "localhost";
$db_name ="booust23";
$username = "root";
$password = "";

try{ 
	$connection = new PDO("mysql:host={$host};dbname ={$db_name}",$username,$password);
}

// show error
catch(PDOException $exception){
	echo "Connection error:" . $exception->getMessage();
}


?>