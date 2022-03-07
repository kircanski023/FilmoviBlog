<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Filmovi/Galerija</title>
	<link rel="stylesheet" href="style/bootstrap.min.css">

	<!-- Ikone -->
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

	<link href="style/style.css" rel="stylesheet">

</head>

<body>

	<!-- Navigation -->

	<?php include_once "includes/navBar.php"; ?>

	<!--- Gallery -->

	<div container-fluid padding>
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Galerija</h1>
			</div>
			<div class="col-12">
				<hr>
			</div>
		</div>
	</div>
	<div class="container-fluid ">
		<div id="slike" class="row">
			<div class="column">
				<img src="img/goodBadUgly.jpg" alt="">
				<img src="img/thematrix.jpg" alt="">
				<img src="img/vkDuks.png" alt="">
				<img src="img/fightClub.jpg" alt="">
			</div>
			<div class="column">
				<img src="img/pulpFiction.jpg" alt="">
				<img src="img/godfather.jpeg" alt="">
				<img src="img/movieCollage.jpg" alt="">
				<img src="img/starWarsShirt.jpg" alt="">
				<img src="img/avivpark.jpg" alt="">
			</div>
			<div class="column">
				<img src="img/strangerThingsDuks.jpg" alt="">
				<img src="img/pulp-fiction-shirt.jpg" alt="">
				<img src="img/LogoVKsaTrakom.png" alt="">
				<img src="img/The_Shawshank_Redemption.jpg" alt="">
				<img src="img/forest.jpg" alt="">
			</div>
		</div>
	</div>
	<hr>

	<!--- Footer -->
	<?php include_once "includes/footer.php"; ?>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scroll.js"></script>

</body>

</html>