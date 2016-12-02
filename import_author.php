<?php
include '.init.php';


//TABLES TO FILL WITH DATA
$tableAuthor = "BLOG_AUTHOR";


//GATHERING DATA FROM BLOG_CATEGORY TABLE IN ORDER TO SHOW THE CATEGORIES INTO OUR HTML PAGE
$sth = $conn->prepare('SELECT Category FROM `'.$tableAuthor.'`');
$sth->execute();
$result = $sth->fetchAll();

foreach ($result as $value)
	{
		$template = file_get_contents("template/blockAuthor.html");
		$tpld = str_replace("{{name}}", $value[0], $template);
      	echo $tpld;
	}


?>