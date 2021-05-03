<!DOCTYPE html>
<html>
<head>
	<title>DisneyPlus</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="css/indexStyle.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg fixed-top bg-link navbar-dark">
			<!-- LOGO -->
			<a class="navbar-brand" href="#"><img class="logoNav" src="images/logoDisney.svg" alt="logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuresponsive">
				<!-- ICONE BOUTON -->
			</button>

			<div class="collapse navbar-collapse" id="menuresponsive">
				<ul class="navbar-nav mr-auto">
					<li class="navItem">
						<a class="nav-link" href="#sectionAPropos"><i class="fas fa-home"></i> Accueil</a>
					</li>
					<li class="navItem">
						<a class="nav-link" href="#realisation"><i class="fas fa-search"></i> Recherche</a>
					</li>
					<li class="navItem">
						<a class="nav-link" href="#parcourScolaire"><i class="fas fa-plus"></i> Ma Liste</a>
					</li>
					<li class="navItem">
						<a class="nav-link" href="#sectionProjet"><i class="fas fa-star"></i> Originales</a>
					</li>
					<li class="navItem">
						<a class="nav-link" href="#section4"><i class="fas fa-film"></i> Films</a>
					</li>
					<li class="navItem">
						<a class="nav-link" href="#contact"><i class="fas fa-tv"></i> Series</a>
					</li>
					<li class="navItemLogo">
						<a class="nav-link" href="seconnecter.php"><img class="logoBadge" src="images/badge.png" alt="badgeConnexion"></a>
					</li>
				</ul>
			</div>

		</nav>
	</header>

	<div id="carouselAccueil" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
		</ul>
		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="imgCarousel" src="images/Accueil/Diaporama/1.jpg" alt="">
			</div>
			<div class="carouselItem  ">
				<img src="images/Accueil/Diaporama/1.png" alt="">
			</div>
			<div class="carousel-item">
				<img class="imgCarousel" src="images/Accueil/Diaporama/2.jpg" alt="">
			</div>
			<div class="carouselItem">
				<img src="images/Accueil/Diaporama/2.png" alt="">
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#carouselAccueil" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#carouselAccueil" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>

	</div>

</body>
</html>