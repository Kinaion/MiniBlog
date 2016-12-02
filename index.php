<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"> 

	<meta name="description" content="description de la page">




	<title>Mini-Blog 2 MCs & 1 V</title>

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/blogStyle.css">

	<!-- js -->


</head>
<body>
	<!-- header -->
	<header>
	<h1>Mini blog</h1>
	</header>

	<!-- filters zone -->
	<div class="wrapper">
		<aside>
			<datalist id="authorList">
				<option value="Berlioz"></option>
				<option value="Marie"></option>
				<option value="Toulouse"></option>
			</datalist>
			
			<label>Auteur : </label>
			<input class="filterAuthor" list="authorList" name="author" placeholder="your name">

<!-- 			<label>Cuisine<input type="radio" name="cat" value="Cuisine"></label>
			<label>Garage<input type="radio" name="cat" value="Garage"></label>
			<label>Décoration<input type="radio" name="cat" value="Décoration"></label>
			<label>Chat<input type="radio" name="cat" value="Chat"></label>
 -->
			<?php include('import_category.php'); ?>

			<input type="submit" value="fresh, so fresh!!">

		</aside>
		
		<main>
			<!-- add an article -->
			<section>

				<input type="submit" value="hello les romanos" href="addArticle.php">

			</section>
			
			<!-- display list articles -->
			<section>
				<?php include 'PHPaffiche.php'; ?>
				
			</section>
		</main>
	</div>
	<!-- footer -->
	<footer>
		lien github projet...
	</footer>

</body>
</html>