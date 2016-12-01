<?php

//SAVE IN A .init.php FILE LATER
$servername = "localhost";
$username = "benoitm";
$password = "U8WxNe1UNf";
$dbname = "benoitm";


//DATA TO GATHER FROM FORM
$formName = $_REQUEST['form_author'];
$formTitle = $_REQUEST['form_title'];
$formContent = $_REQUEST['form_content'];
$formCategory = $_REQUEST['form_category'];


//TABLES TO FILL WITH DATA
$tableAuthor = "BLOG_AUTHOR";
$tableArticle = "BLOG_ARTICLE";
$tableCategory = "BLOG_CATEGORY";


//CONNEXION TO DATABASE USING PDO
$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//NAME REQUEST
$sth = $conn->prepare('INSERT INTO `'.$tableAuthor.'` (Name) VALUES (:Name)');
$sth -> bindParam(':Name', $formName);
$sth -> execute();


//AUTHOR_ID REQUEST - IN ORDER TO LINK BLOG_ARTICLE AND BLOG_AUTHOR TABLES
$sth = $conn->prepare('SELECT Author_ID FROM `'.$tableAuthor.'` WHERE (Name) = (:Name)');
$sth -> bindParam(':Name', $formName);
$sth -> execute();
$idAuthor = $sth->fetchAll();


//CATEGORY_ID REQUEST - IN ORDER TO LINK BLOG_ARTICLE AND BLOG_CATEGORY TABLES
$sth = $conn->prepare('SELECT Category_ID FROM `'.$tableCategory.'` WHERE (Category) = (:Category)');
$sth -> bindParam(':Category', $formCategory);
$sth -> execute();
$idCategory = $sth->fetchAll();


//TITLE & CONTENT REQUEST (WILL ADD CATEGORY REQUEST TO IT ... SOON)
$sth = $conn->prepare('INSERT INTO `'.$tableArticle.'` (Title, Content, Author_ID, Category_ID) VALUES (:Title, :Content, :AuthorID, :CategoryID)');
$sth -> bindParam(':CategoryID', $idCategory[0]['Category_ID']);
$sth -> bindParam(':AuthorID', $idAuthor[0]['Author_ID']);
$sth -> bindParam(':Title', $formTitle);
$sth -> bindParam(':Content', $formContent);
$sth -> execute();






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