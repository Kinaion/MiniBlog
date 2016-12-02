<?php

include'.init.php';

/* request without filters BLOG_ARTICLE.Title, BLOG_ARTICLE.Content, BLOG_ARTICLE.Date, BLOG_AUTHOR.Name, BLOG_CATEGORY.Category, BLOG_ARTICLE.Article_ID*/
$requete = 'SELECT *
FROM BLOG_ARTICLE
NATURAL JOIN BLOG_CATEGORY
NATURAL JOIN BLOG_AUTHOR';


/* test values from form ($_REQUEST) and add conditions in $requete if necessary*/
$condition = 0;

if(!empty($_REQUEST['author'])) 
{ 
    $author = $_REQUEST['author']; 
    $condition += 1;
}

if(!empty( $_REQUEST['form_category'])) 
{
    $category = $_REQUEST['form_category'];
    $condition += 10;
}

switch ($condition) {
    case 1: //  filter = author
        $requete .= " WHERE BLOG_AUTHOR.Name = '".$_REQUEST['author']."'";   
        break;

    case 10: // filter = category
        $requete .= " WHERE BLOG_CATEGORY.Category = '".$_REQUEST['form_category']."'" ;
        break;

    case 11: // filter = author + category
        $requete .= " WHERE BLOG_AUTHOR.Name = '".$_REQUEST['author']."' AND BLOG_CATEGORY.Category = '".$_REQUEST['form_category']."'" ;    
        break;
}



$sth = $conn->prepare($requete);
$sth->execute();
$result = $sth->fetchAll();

$template = file_get_contents("template/blockArticle.html");

for ($i=0; $i< count($result); $i++)

	{
		$tpl = str_replace("{{id_article}}", $result[$i]['Article_ID'],$template);
		$tpl = str_replace("{{Titre}}", $result[$i]['Title'],$tpl);
    	$tpl = str_replace("{{Author}}", $result[$i]['Name'],$tpl);
    	$tpl = str_replace("{{Date}}", $result[$i]['Date'],$tpl);
        $tpl = str_replace("{{Category}}", $result[$i]['Category'],$tpl);
    	$tpl = str_replace("{{Content}}", $result[$i]['Content'],$tpl);
    	

    	echo $tpl;
    }

?>