


<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="main.css">

	<title>Accueil</title>

	<style type="text/css">
		.locars {
			border-radius: 10px;
		}
	</style>
</head>

<body>

	<header id="header" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img class="locars" src="/project/logo.png" alt="" title="" width=110px /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						
						<li class="menu-active"><a href="index.php">accueil</a></li>
						<li><a href="src/about.php">À propos de nous</a></li>
						<li><a href="src/gestion.php">Nos voiture</a></li>

						

						<li><a href="src/contact.php">Contact</a></li>

						
					</ul>
				</nav>
				<!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->


	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-7 col-md-6 ">

					<h1 class="text-white text-uppercase">
						Une prestation de qualité pour votre location de véhicule
					</h1>
					<p class="pt-20 pb-20 text-white">
						Louer un véhicule avec Locars ce n’est pas simplement trouver le meilleur moyen de se rendre d’un point A à un point B. C’est une invitation au voyage, au volant d’un véhicule qui saura seconder toutes vos envies, vous permettant ainsi de profiter d’une expérience mémorable
					</p>

				</div>
			
			</div>
		</div>
	</section>
	<!-- End banner Area -->
 <section class="our-cars">
 	
 	<div class="cards">

 		<div class="c1 card">
 			<div class="pic1"></div>
 			<p>Dacia Sandero</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">400dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer">Voir the offer</a></div>
 		</div>
 		<div class="c2 card">
 			<div class="pic2"></div>
 			<p>Dacia Logan</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">400dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer">Voir the offer</a></div>
 		</div>
 		<div class="c3 card">
 			<div class="pic3"></div>
 			<p>Dacia Dokker</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">400dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer">Voir the offer</a></div>
 		</div>
 		<div class="c4 card">
 			<div class="pic4"></div>
 			<p>Peugeot 208</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">400dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer" >Voir the offer</a></div>
 		</div>
 	</div>
 </section>
	<?php include 'src/footer.html'; ?>

	<!-- START INCLUDE SCRIPT -->
	<script src="outils/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="./outils/js/vendor/bootstrap.min.js"></script>
	<script src="./outils/js/main.js"></script>
	<!-- END SCRIPT -->
</body>

</html>