<?php
include '.init.php';

//TABLES TO FILL WITH DATA
$tableCategory = "BLOG_CATEGORY";


//GATHERING DATA FROM BLOG_CATEGORY TABLE IN ORDER TO SHOW THE CATEGORIES INTO OUR HTML PAGE
$sth = $conn->prepare('SELECT Category FROM `'.$tableCategory.'`');
$sth->execute();
$result = $sth->fetchAll();

foreach ($result as $value)
	{
		$templateCategory = file_get_contents("blockcategory.html");
		$tpld = str_replace("{{nomCategory}}", $value[0], $templateCategory);
      	echo $tpld;
	}

?>