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
		$tpl = str_replace("{{Article_ID}}", $result[i][Article_ID]);
    	$tpl = str_replace("{{filename}}", $filename, $tpl);
    	$tpl = str_replace("{{type}}", $type, $tpl);
    	$tpl = str_replace("{{size}}", $stat['size'], $tpl);
    	$tpl = str_replace("{{mtime}}", date(' jS m Y h:i A', $stat['mtime']), $tpl);
    	$tpl = str_replace("{{ctime}}", date(' jS m Y h:i A',$stat['ctime']), $tpl);
    }

 	
?>