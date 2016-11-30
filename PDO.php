<?php

$servername = "localhost";
$username = "benoitm";
$password = "U8WxNe1UNf";
$dbname = "benoitm";


$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);


$sth = $conn->prepare('SELECT ACS.ID, ACS.NOM, ACS.PRENOM, DEPARTEMENTS.NOM_D
FROM ACS
INNER JOIN DEPARTEMENTS
ON ACS.DEPARTEMENT=DEPARTEMENTS.ID_D');
$sth->execute();
$result = $sth->fetchAll();

echo "<table>";
foreach ($result as $value)
	{
	 	echo "<tr><td>" . $value['ID'] . "</td><td>" . $value['PRENOM'] . "</td><td>" . $value['NOM'] . "</td><td>" . $value['NOM_D'] . "</td></tr>";
	}
echo "</table>";

/*$connection = mysql_connect('localhost', 'benoitm', 'U8WxNe1UNf');
mysql_select_db('benoitm');

$query = 'SELECT ACS.ID, ACS.NOM, ACS.PRENOM, DEPARTEMENTS.NOM_D
FROM ACS
INNER JOIN DEPARTEMENTS
ON ACS.DEPARTEMENT=DEPARTEMENTS.ID_D';
$result = mysql_query($query);

echo "<table>";

while($row = mysql_fetch_array($result))
	{
		echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['PRENOM'] . "</td><td>" . $row['NOM'] . "</td><td>" . $row['NOM_D'] . "</td></tr>";
	}

echo "</table>";

mysql_close();*/

?>