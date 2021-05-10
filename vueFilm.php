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
	<link rel="stylesheet" type="text/css" href="css/vueFilmStyle.css">
</head>
<body>

	<?php
	require("navbar.php")
	?>
	<div class="enteteFilm">
		<img class="logoFilm" src="images/Film/title.png">
	</div>
	<div class="btnHead">
			<button type="button" id="reprendre" class="btn btn-light mb-2"><i class="fas fa-play"></i> REPRENDRE</button>
			<button type="button" id="annonce" class="btn btn-link mb-2"><i class="fas fa-play"></i> BANDE-ANNONCE</button>
	</div>

</body>
</html>