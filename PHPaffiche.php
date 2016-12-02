<?php

include'.init.php';

$requete = 'SELECT BLOG_ARTICLE.Title, BLOG_ARTICLE.Content, BLOG_ARTICLE.Date, BLOG_AUTHOR.Name, BLOG_CATEGORY.Category, BLOG_ARTICLE.Article_ID
FROM BLOG_ARTICLE
NATURAL JOIN BLOG_CATEGORY
NATURAL JOIN BLOG_AUTHOR';


/*if(isset($_REQUEST['author'])) {
	$requete .= 'WHERE BLOG_ARTICLE = `'.$_REQUEST['author'].'`';
}
print_r($sth);
*/
/*teste les $_REQUEST reçus des filtres*/
/*si filtres alors on ajoute des conditions WHERE à $sth*/

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
    	

    	echo $tpl;
    }



 	
?>