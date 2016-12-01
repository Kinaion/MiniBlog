<?php
include '.init.php';
$templateCategory = file_get_contents("blockcategory.html");


//TABLES TO FILL WITH DATA
$tableCategory = "BLOG_CATEGORY";


//GATHERING DATA FROM BLOG_CATEGORY TABLE IN ORDER TO SHOW THE CATEGORIES INTO OUR HTML PAGE
$sth = $conn->prepare('SELECT Category FROM `'.$tableCategory.'`');
$sth->execute();
$result = $sth->fetchAll();

/*print_r($result);*/

foreach ($result as $value)
	{

		$tpld = str_replace("{{nomCategory}}", $value[0], $templateCategory);
      	
      	echo $tpld;
	}


?>