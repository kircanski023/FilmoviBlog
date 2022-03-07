<?php
include_once "includes/connection.php"
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Filmovi</title>
	<link rel="stylesheet" href="style/bootstrap.min.css">

	<!-- Ikonice -->
	<script src="https://use.fontawesome.com/releases/v5.11.1/js/all.js"></script>

	<link href="style/style.css" rel="stylesheet">

</head>

<body>

	<?php include_once "includes/navBar.php"; ?>


	<!--- Image Slider -->
	<div id="slides" class="carousel slide" data-ride="carousel" data-interval="1000000">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active">
			</li>
			<li data-target="#slides" data-slide-to="1">
			</li>
			<li data-target="#slides" data-slide-to="2">
			</li>
		</ul>
		<div class="carousel-inner">
			<div id="naslovni" class="carousel-item active">
				<img src="img/pozadinaZvezde.jpg">
				<div class="carousel-caption">
					<h4>Dobrodošli u</h4>
					<h1>SVET FILMOVA</h1>
					<a href="oNama.php"><button type="button" class="btn btn-outline-light btn-lg">O
							NAMA</button></a>
				</div>
			</div>

			<div id="posao" class="carousel-item">
				<img src="img/posao.jpg">
				<div class="carousel-caption">
					<h1>Najnovije vesti</h1>
					<a href="blog.php"><button type="button" class="btn btn-outline-dark btn-lg">NAŠ
							BLOG</button></a>
				</div>
			</div>
			<div id="naKatalog" class="carousel-item">
				<img src="img/movieCollage.jpg">
				<div class="carousel-caption">
					<h1>PREGLEDAJTE PROIZVODE</h1>
					<a href="katalog.php"><button type="button" class="btn btn-outline-light btn-lg">KATALOG</button></a>
				</div>
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#slides" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#slides" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>

	</div>

	<!--- Naslov Section -->

	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Za ljubitelje filmova i ostale.
				</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">Kupujte...</p>
			</div>
		</div>
	</div>

	<!--- Three Column Section -->

	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-ticket-alt"></i>
				<h3>Clanstvo</h3>
				<p>Postani član! - Ostvari razne popuste i dodatne usluge </p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-compact-disc"></i>

				<h3>Katalog</h3>
				<p>Širok katalog digitalnih, DVD i BluRay naslova odmah dostupnih!</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<i class="fas fa-shipping-fast"></i>
				<h3>Brza Isporuka</h3>
				<p>Isporuka na kućnu adreasu za 2 do 3 radna dana!</p>
			</div>
		</div>
	</div>
	<!--- hr = horisontal ruler -->
	<hr class="my-4">
	<!-- POSTS -->

	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Blog
			</h1>
		</div>
		<hr class="my-3">
		<div class="container">
			<div class="card-columns">
				<?php
				$sql = "SELECT * FROM `post` ORDER BY post_id DESC LIMIT 0,3";
				$result = mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_assoc($result)) {

					$post_title = $row['post_title'];
					$post_image = $row['post_image'];
					$post_author = $row['post_author'];
					$post_content = $row['post_content'];
					$post_id = $row['post_id'];

					$sqlauth = "SELECT * FROM author WHERE author_id='$post_author'";
					$resultauth = mysqli_query($conn, $sqlauth);
					while ($authrow = mysqli_fetch_assoc($resultauth)) {
						$post_author_name = $authrow['author_name'];


				?>
						<div class="card" style="width: 18rem;">
							<a href="post.php?id=<?php echo $post_id; ?>"><img class="card-img-top" src="<?php echo $post_image ?>" alt="Card image cap"></a>
							<div class="card-body">
								<h5 class="card-title"><?php echo $post_title ?></h5>
								<h6 class="card-subtitle mb-2 text-muted"><?php echo $post_author_name ?></h6>
								<p class="card-text"><?php echo substr(strip_tags($post_content), 0, 90) . "..."; ?></p>
								<a href="post.php?id=<?php echo $post_id; ?>"><button type="button" class="btn btn-outline-dark">Nastavite sa čitanjem</button></a>
							</div>
						</div>

				<?php
					}
				} ?>
			</div>
		</div>
	</div>
	<br>
	<hr my-4>

	<!--- Two Column Section -->

	<div id="otpremljeno" class="container-fluid padding">
		<div class="row padding">
			<div class="col-lg-6">
				<h2>
					Otpremljeno za vas
				</h2>
				<p>Možda već imate dugačke liste filmova, koje nikako da
					pogledate, jer vas svakodnevica često u tome ometa, a
					možda i nemate, pa vas je kućna izolacija, usled
					proglašenog vanrednog stanja i pandemije virusa Covid – 19,
					zatekla nespremne. Kojoj god grupi da pripadate, verujemo
					da je ovih dana Oblakoderov video klub pravo mesto za vas!</p>
				<p>Pitali smo naše kupce koji su njihovi omiljeni filmovi i
					preporuke za premošćavanje dugih i neretko dosadnih
					karantinskih dana kod kuće i uz dodatak naših favorita
					napravili našu prvu listu. Ovde ćete se susresti sa
					najrazličitijim žanrovima: od trilera i detekstivskih priča,
					preko komedija, romansi, drama do biografija i distopija.
					Lista nema kvalitativan redosled, sem što filmovi srodnijeg
					senzibiliteta stoje jedan do drugog, no ne budite zakerala
					čak i ako nije tako, jer su neka ostvarenja i za nas potpuno
					nova.</p>
				<p>Namestite se udobno, pripremite kokice, odaberite svog
					favorita sa liste i bacite se na gledanje!
				</p>
				<br>
				<a href="stranice/blog.html"><button type="button" class="btn btn-outline-dark btn-lg">Pogledajte listu</button></a>
			</div>
			<div class="col-lg-6 embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/U0x9HtYgVqA" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<hr my-4>

	<!--- Povezi se -->

	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Povezi se...</h2>
			</div>
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</div>

	<?php include_once "includes/footer.php"; ?>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scroll.js"></script>

</body>

</html>