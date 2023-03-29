<?php

// connet the database
<<<<<<< HEAD
$host = "db4free.net";
$db_name ="boousttest";
$username = "realmike";
$password = "miketest";


try{ 
	$connection = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
=======
$host = "localhost";
$db_name ="booust23";
$username = "root";
$password = "";

try{ 
	$connection = new PDO("mysql:host={$host};dbname ={$db_name}",$username,$password);
>>>>>>> 12a525ed78a733a8ef5f794c4b1886fdda529c19
}

// show error
catch(PDOException $exception){
	echo "Connection error:" . $exception->getMessage();
}


?>