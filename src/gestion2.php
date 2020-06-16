<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../outils/css/style.css">
	<link rel="stylesheet" href="../outils/css/main.css">
	<title>gestion</title>
    <style type="text/css">
.locars {
    border-radius: 10px;
        }
   
.gestion label{ 
    color: darkgoldenrod;
    font-weight: bold;}
		
       
        
	</style>
</head>

<body>

	<header id="header" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="../index.php"><img class="locars" src="/project/logo.png" alt="" title="" width=100px /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						
						<li class="menu-active"><a href="../index.php">accueil</a></li>
						<li><a href="about.php">À propos de nous</a></li>
						<li><a href="gestion.php">Nos voiture</a></li>
						<li><a href="contact.php">Contact</a></li>

						
					</ul>
				</nav>
				<!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<!-- start banner Area -->
	<section class="banner-area relative" id="home" >
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Nos voiture
					</h1>

				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	 <section class="our-cars" style="background: white; padding: 2em;">
 	
 	<div class="cards">

 		<div class="c1 card">
 			<div class="pic12 pics"></div>
 			<p>Dacia Sandero</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">300dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer">Voir l'offre</a></div>
 		</div>
 		<div class="c2 card">
 			<div class="pic22 pics"></div>
 			<p>Dacia Logan</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">500dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer">Voir l'offre</a></div>
 		</div>
 		<div class="c3 card">
 			<div class="pic32 pics"></div>
 			<p>Dacia Dokker</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">400dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer">Voir l'offre</a></div>
 		</div>
 		<div class="c4 card">
 			<div class="pic42 pics"></div>
 			<p>Peugeot 208</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">200dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer" >Voir l'offre</a></div>
 		</div>

 		<div class="c1 card">
 			<div class="pic52 pics"></div>
 			<p>	Fiat Panda</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">550dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer">Voir l'offre</a></div>
 		</div>
 		<div class="c2 card">
 			<div class="pic62 pics"></div>
 			<p> Peugeot 206+</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">400dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer">Voir l'offre</a></div>
 		</div>
 		<div class="c3 card">
 			<div class="pic72 pics"></div>
 			<p>	Dacia Logan</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">400dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer">Voir l'offre</a></div>
 		</div>
 		<div class="c4 card">
 			<div class="pic82 pics"></div>
 			<p>	Ford Fiesta</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">700dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer" >Voir l'offre</a></div>
 		</div>
 	</div>
 	<div class="buttons">
 		<ul>
 		<a href="gestion.php" ><li style="padding: 0.5em 1.3em; margin-left: 1em"><< Previous </li></a>
 		<a href="gestion.php"><li style="padding: 0.5em 1em;">1</li></a>
 		<a href="gestion2.php"><li style="padding: 0.5em 1em;">2</li></a>
 		
 	</ul>
 	</div>
 </section>



	

	<?php include 'footer.html'; ?>

	<!-- MDBootstrap Datatables  -->
	<script src="../outils/js/main.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#ajouter').DataTable();
		});
	</script>
	<!-- END SCRIPT -->
</body>

</html>