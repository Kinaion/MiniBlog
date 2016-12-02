<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"> 

	<meta name="description" content="description de la page">




	<title>Mini-Blog 2 MCs & 1 V</title>
	
	<!--Import Google Icon Font-->
	<!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

	<!-- import materialize -->
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>


	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/blogStyle.css">

</head>
<body>
	<!-- header -->
	<header>
	<h1>Mini blog</h1>
	</header>

	<!-- filters zone -->
	<div class="wrapper">
		<aside>

			<form action="index.php" method="get">
				<datalist id="authorList">
					<?php include('import_author.php'); ?>
				</datalist> 
				
				<label>Auteur : </label>
				<input class="filterAuthor" list="authorList" name="author" placeholder="your name">

				<?php include('import_category.php'); ?>

				<input type="submit" value="fresh, so fresh!!">
			</form>

		</aside>
		
		<main>
			<!-- add an article -->
			<section>

				<a href="addArticle.php">Ajouter un article</a>

			</section>
			
			<section>
				<article> 
					<div>Titre</div>
					<div>Auteur</div>
					<div>Date</div>
					<div>Categorie</div>
				</article>
				
				<!-- display list articles -->
				<?php include 'PHPaffiche.php'; ?>

		
		<!-- zone test article ******************************************** -->

				
			</section>
		</main>
	</div>
	<!-- footer -->
	<footer>
		lien github projet...
	</footer>

</body>
</html>