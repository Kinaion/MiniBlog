<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"> 

	<meta name="description" content="description de la page">

	<title>Mini-Blog - liste des articles</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="css/img/favicon.ico" />	


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

	<script type="text/javascript">
	  $(document).ready(function(){
	    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	    $('.modal').modal();
	  });
	</script>    

</head>
<body class="container-fluid">
	<!-- header -->
	<header class="grey darken-4">
		<h1><i class="medium material-icons">pets</i> Mini blog </h1>
	</header>

	<!-- filters zone -->
	<main class="row">
		<aside class="col s12 m3">

			<form action="index.php" method="post">
				
				<p>
					<label for="author">Auteur : </label>
					<input class="filterAuthor" list="authorList" name="author" placeholder="Auteur">

					<datalist id="authorList">
						<?php include('import_author.php'); ?>
					</datalist> 
					</p>
					<p>
				<?php include('import_category.php'); ?>
				</p>
				<input class="btn" type="submit" value="Filtrer">
			</form>
			
			<hr />
			<!-- add an article -->

			<p>
			<!-- 	<label> Ajouter un article : </label> -->
				<a class="btn" href="addArticle.php">Ajouter article </a><!-- <i class="tiny material-icons">add</i> -->
			</p>


		</aside>
		
		<div class="col s12 m9">
			
			<section class="container-fluid">
	
				<!-- display list articles -->
				<?php include 'PHPaffiche.php'; ?>
					          
				
			</section>
		</div>
	</main>
	<!-- footer -->
	<footer class="footer grey darken-4">
		<a class="rigth" href=" https://github.com/Kinaion/MiniBlog"> mini-blog on Github</a>
	</footer>

</body>
</html>