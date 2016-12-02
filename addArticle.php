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
		
		<main>
			<!-- add an article -->
			<form name="add_article" action="blog_form.php" method="get">
				
					<label for="form_author">Auteur : </label>
					<input type="text" list='form_author' name="form_author" required>
						<datalist id="form_author">
							<?php include('import_author.php'); ?>
						</datalist> 

					<?php include 'import_category.php' ?> <!-- calling categories and adding them to the HTML page -->
					
					<label for="form_addcategory">Ajouter une catégorie : </label>
					<input type="text" name="form_addcategory">

					<label for="form_title">Titre : </label>
					<input type="text" name="form_title" required>

					<label for="form_content">Article : </label>
					<textarea name="form_content" placeholder="votre article..." required></textarea>
				
					<input type="submit" value="Submit">
					<a href="index.php"><input type="button" value="Retour"></a>

			</form>
		</main>
	</div>
	<!-- footer -->
	<footer>
		lien github projet...
	</footer>

	<script>

	</script>

</body>
</html>