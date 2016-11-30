<?php

$servername = "localhost";
$username = "benoitm";
$password = "U8WxNe1UNf";
$dbname = "benoitm";


$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);


$sth = $conn->prepare('SELECT * FROM BLOG_ARTICLE');
$sth->execute();
$result = $sth->fetchAll();

echo "<table>";
foreach ($result as $value)
	{
	 	echo "<tr><td>" . $value['Author_ID'] . "</td><td>" . $value['Title'] . "</td><td>" . $value['Content'] . "</td><td>" . $value['Date'] . "</td></tr>";
	}
echo "</table>";

?>