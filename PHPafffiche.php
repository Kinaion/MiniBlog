<?php



*include'.init.php';

$sth = $conn->prepare('SELECT BLOG_ARTICLE.Title, BLOG_ARTICLE.Content, BLOG_ARTICLE.Date, BLOG_CATEGORY.Category
FROM BLOG_ARTICLE
NATURAL JOIN BLOG_CATEGORY
');

$sth->execute();
$result = $sth->fetchAll();

print_r($result);





?>