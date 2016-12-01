<?php

include'.init.php';

$sth = $conn->prepare('SELECT BLOG_ARTICLE.Title, BLOG_ARTICLE.Content, BLOG_ARTICLE.Date, BLOG_CATEGORY.Category
FROM BLOG_ARTICLE
NATURAL JOIN BLOG_CATEGORY
');

$sth->execute();
$result = $sth->fetchAll();

print_r($result);




$template = file_get_contents("blockArticle.html");

for (i=0; i<$result[0].lenght; i++)

	{
		$tpl = str_replace("{{TITRE}}", $result[i][Article_ID]);
    	$tpl = str_replace("{{Author}}", $result[i][Author_ID]);
    	$tpl = str_replace("{{Date}}", $result[i][Author_ID]);
    	$tpl = str_replace("{{Category}}", $result[i][Category_ID]);
    	
    }

 	
?>