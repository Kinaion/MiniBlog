<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"> 

	<meta name="description" content="description de la page">

	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<!-- import materialize -->
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">


	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>


	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/blogStyle.css">



	<title>Mini-Blog 2 - ajouter un article</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="css/img/favicon.ico" />	
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/blogStyle.css">

	<!-- js -->


</head>
<body class="container-fluid">
	<!-- header -->
	<header class="grey darken-4">
		<h1><i class="medium material-icons">pets</i> Mini blog </h1>
	</header>


	<main class="container-fluid">

 			<!-- add an article -->
			<form class="row" name="add_article" action="blog_form.php" method="post">

					<aside class="col s12 m3">
			
						<p><label for="form_author">Auteur : </label>
						<input type="text" list='form_author' name="form_author" required>
							<datalist id="form_author">
								<?php include('import_author.php'); ?>
							</datalist> 
							</p>
	


				
						<p><label>Catégrie :</label></p>			
						<?php include 'import_category.php' ?>
			
					 <!-- calling categories and adding them to the HTML page -->
						<p>
							<label for="form_addcategory">Ajouter une catégorie : </label>
							<input type="text" name="form_addcategory">
						</p>		
		

					</aside>

					<section class="col s12 m9">						
				
						<p>
						<label for="form_title">Titre : </label>
						<input type="text" name="form_title" required>
						</p>

						<p>
						<label for="form_content">Article : </label>
						</p>
		
						<p>
						<textarea class="materialize-textarea" name="form_content" placeholder="votre article..." rows="50"
						required></textarea>
						</p>
	

					<input class="btn" type="submit" value="Submit">
					<a href="index.php"><input class="btn" type="button" value="Retour"></a>

					</section>
			</form>

	</main>
	<!-- footer -->
	<footer class="footer-copyrigth grey darken-4 grey-text text-lighten-4 right">
		<a href=" https://github.com/Kinaion/MiniBlog"> mini-blog on Github</a>
	</footer>

	<script>

	</script>

</body>
</html>