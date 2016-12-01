<?php

include'.init.php';

$sth = $conn->prepare('SELECT BLOG_ARTICLE.Title, BLOG_ARTICLE.Content, BLOG_ARTICLE.Date, BLOG_ARTICLE.Author_ID, BLOG_CATEGORY.Category
FROM BLOG_ARTICLE
NATURAL JOIN BLOG_CATEGORY
');

$sth->execute();
$result = $sth->fetchAll();

print_r($result);




$template = file_get_contents("blockArticle.html");

for (i=0; i<$result.lenght; i++)

	{
		$tpl = str_replace("{{id_article}}", $result[i][Article_ID],$template);
		$tpl = str_replace("{{Titre}}", $result[i][Title],$tpl);
    	$tpl = str_replace("{{Author}}", $result[i][Author_ID],$tpl);
    	$tpl = str_replace("{{Date}}", $result[i][Date],$tpl);
    	$tpl = str_replace("{{Category}}", $result[i][Category],$tpl);
    	
    }

 	
?>