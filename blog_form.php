<?php
include '.init.php';

//TABLES TO FILL WITH DATA
$tableAuthor = "BLOG_AUTHOR";
$tableArticle = "BLOG_ARTICLE";
$tableCategory = "BLOG_CATEGORY";


//DATA TO GATHER FROM FORM
$formName = $_REQUEST['form_author'];
$formTitle = $_REQUEST['form_title'];
$formContent = $_REQUEST['form_content'];
//IF THE CATEGORY RADIO IS NOT SET, THEN IT WILL BE 'UNDEFINED'
if (isset($_REQUEST['form_category'])) 
    {
        $formCategory = $_REQUEST['form_category'];
    }
else
    {
        $formCategory = 'UNDEFINED';
    }



//NAME REQUEST => IF THE NAME ALREADY EXIST THEN IT'S NOT ADDING A NEW ONE
try
    {
        $sth = $conn->prepare('INSERT INTO `'.$tableAuthor.'` (Name) VALUES (:Name)');
        $sth -> bindParam(':Name', $formName);
        $sth -> execute();
    }
catch(Exception $e) 
    {
        /*echo 'Message: ' .$e->getMessage();*/
    }


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


//TITLE & CONTENT & CATEGORY REQUEST 
$sth = $conn->prepare('INSERT INTO `'.$tableArticle.'` (Title, Content, Author_ID, Category_ID) VALUES (:Title, :Content, :AuthorID, :CategoryID)');
$sth -> bindParam(':CategoryID', $idCategory[0]['Category_ID']);
$sth -> bindParam(':AuthorID', $idAuthor[0]['Author_ID']);
$sth -> bindParam(':Title', $formTitle);
$sth -> bindParam(':Content', $formContent);
$sth -> execute();

?>