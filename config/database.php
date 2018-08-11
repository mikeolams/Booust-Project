<?php

// connet the database
$host = "db4free.net";
$db_name ="boousttest";
$username = "realmike";
$password = "miketest";


try{ 
	$connection = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

// show error
catch(PDOException $exception){
	echo "Connection error:" . $exception->getMessage();
}


?>