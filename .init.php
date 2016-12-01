<?php
	
$servername = "localhost";
$username = "benoitm";
$password = "U8WxNe1UNf";
$dbname = "benoitm";

$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4",$username, $password);
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>