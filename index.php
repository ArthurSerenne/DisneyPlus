<!DOCTYPE html>
<html>
<head>
	<title>DisneyPlus</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/indexStyle.css">
</head>
<body>

	<?php
	require("navbar.php")
	?>

	<section id="carouselAccueil">
		<div class="container-fluid">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="images/Accueil/Diaporama/1.jpg" alt="First slide">
					</div>
					<div class="carousel-item active">
						<img class="d-block w-100" src="images/Accueil/Diaporama/1.png" alt="Second slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>

	<section id="listeMarque">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-4 col-md-2">
					<div class="iconMarque1">
						<img class="icon1" src="images/Accueil/Marques/1.png">
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-2">
					<div class="iconMarque2">
						<img class="icon1" src="images/Accueil/Marques/2.png">
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-2">
					<div class="iconMarque3">
						<img class="icon1" src="images/Accueil/Marques/3.png">
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-2">
					<div class="iconMarque4">
						<img class="icon1" src="images/Accueil/Marques/4.png">
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-2">
					<div class="iconMarque5">
						<img class="icon1" src="images/Accueil/Marques/5.png">
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-2">
					<div class="iconMarque6">
						<img class="icon1" src="images/Accueil/Marques/6.png">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="ligne1">
		<div class="container-fluid">
			<h3>Nouveau sur Disney+</h3>
			<div class="premiereLigne">
				<img class="imageLigne1" src="images/Accueil/Ligne1/1.jpg">
				<img class="imageLigne1" src="images/Accueil/Ligne1/2.jpg">
				<img class="imageLigne1" src="images/Accueil/Ligne1/3.jpg">
				<img class="imageLigne1" src="images/Accueil/Ligne1/4.jpg">
				<img class="imageLigne1" src="images/Accueil/Ligne1/5.jpg">
			</div>
		</div>
	</section>

	<!-- <section id="ligne2">
		<div class="container-fluid">
			<h3>Nouveau sur Disney+</h3>
			<div class="premiereLigne">
				<img class="imageLigne2" src="images/Accueil/Ligne2/1.jpg">
				<img class="imageLigne2" src="images/Accueil/Ligne2/2.jpg">
				<img class="imageLigne2" src="images/Accueil/Ligne2/3.jpg">
				<img class="imageLigne2" src="images/Accueil/Ligne2/4.jpg">
				<img class="imageLigne2" src="images/Accueil/Ligne2/5.jpg">
			</div>
		</div>
	</section>

	<section id="ligne3">
		<div class="container-fluid">
			<h3>Nouveau sur Disney+</h3>
			<div class="premiereLigne">
				<img class="imageLigne3" src="images/Accueil/Ligne3/1.jpg">
				<img class="imageLigne3" src="images/Accueil/Ligne3/2.jpg">
				<img class="imageLigne3" src="images/Accueil/Ligne3/3.jpg">
				<img class="imageLigne3" src="images/Accueil/Ligne3/4.jpg">
				<img class="imageLigne3" src="images/Accueil/Ligne3/5.jpg">
			</div>
		</div>
	</section> -->

	<?php
	require("footer.php")
	?>

</body>
</html>