<?php

if (isset($_REQUEST['form_author']))

{
	$formName = $_REQUEST['form_author'];
}


$servername = "localhost";
$username = "benoitm";
$password = "U8WxNe1UNf";
$dbname = "benoitm";
$tableAuthor = "BLOG_AUTHOR";

$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sth = $conn->prepare('INSERT INTO `'.$tableAuthor.'` (Name) VALUES (:Name)');

$sth -> bindParam(':Name', $formName);
$sth -> execute();

print_r($sth);


/*    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    // insert a row
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    // insert another row
    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    // insert another row
    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $stmt->execute();*/






/*$first = $_REQUEST['firstName'];
$last = $_REQUEST['lastName'];
$email = $_REQUEST['email'];
$type =  $_REQUEST['race'];
$galaxy =  $_REQUEST['galaxy'];

$maTable = "ALIENSANDCO";

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
// error : email is empty or incorrect
	echo 'your email is not valid';
}   
else
//email valid and valid
{
	//send information to database
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO($hostname, $user, $pwd);
		//$bdd->exec("set names utf8");
		
		$req = " INSERT INTO `".$bdName."`.`".$maTable."` (`First_Name`, `Last_Name`, `Email`, `Type`, `Galaxy`) VALUES ('".$first."', '".$last."', '".$email."', '".$type."', '".$galaxy."');" ; 

		$stmt = $bdd->query($req);

		echo "ok, you join the Dead Alien Society";

	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}


	//send request to database
}*/

?>