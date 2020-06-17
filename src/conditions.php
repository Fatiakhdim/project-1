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
					<a href="../index.php"><img class="locars" src="/project/imgs/logo/logo.png" alt="" title="" width=100px /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						
						<li class="menu-active"><a href="../index.php">accueil</a></li>
						<li><a href="about.php">À propos de nous</a></li>
						<li><a href="gestion.php">Nos voiture</a></li>
						<li><a href="contact.php">Contact</a></li>
                        <li><a href="src/conditions.php">Les conditions</a></li>
						

						
					</ul>
				</nav>
				<!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<!-- start banner Area -->
<section class="conditions" style="background: white; padding: 3em; ">
	<h1 style="text-align: center; margin-bottom: 2em;"> Conditions de location</h1>
	<div title="agence de location de véhicules à fès Maroc" id="body">
         
		
		<h4><u>Durée:</u></h4>
		<p>
		La location est consentie pour la durée déterminée au contrat sauf prolongation conventionnelle accordée par le loueur.<br> A défaut de restitution, à l'échéance convenue, celui ci se réserve le droit de reprendre le véhicule où qu'il se trouve, aux frais du locataire. 
		</p>
		<br>
		<h4><u>Livraison / reprise :</u></h4>
		<p>
		Les véhicules peuvent être livrés ou récupérées à l'endroit de votre choix. (Aéroports, Hôtels, Gares, etc...)<br>
               Une empreinte de carte de crédit est obligatoire à la livraison.<br>
                L’utilisation des véhicules sur pistes non goudronnées est absolument interdite. <br>
		</p>
				<br>
		<h4><u>Location de longue durée :</u></h4>
		<p>
		Sur demande, des tarifs très avantageux pour toute location de plus d’un mois.
         Les tarifs journaliers sont calculés sur la base de 24 heures.<br>
         Les tarifs hebdomadaires sont calculés sur la base de 7 jours consécutifs. <br>
		</p>
			<br>
		<h4><u>Paiement:</u></h4>
		<p>
		Nos tarifs comprennent Le kilométrage illimité, les lubrifiants et l’entretien du véhicule, la livraison / récupération du véhicule. Nos tarifs sont exprimés en Euros. 
		</p>
			<br>
		<h4><u>Assurances:</u></h4>		
		<p>
		Les véhicules sont assurés tout risques. Toutefois, pour tout dégât autre que le vol du véhicule, incendie, bris de glace, responsabilité civile et personnes transportées (PAI),<br> une franchise non rachetable plafonnée reste à la charge du conducteur dans le cas ou sa responsabilité partielle ou entière serait engagée.<br> Pour tout accident, un constat est obligatoire. 
		</p>
					<br>
		<h4><u>Réservation:</u></h4>
		<p>
		Pour réserver un véhicule chez Car4all, vous pouvez le faire en ligne ou bien nous contacter par téléphone :<br><b><font color="#000000">00212 667 32 59 48/ 00212 535 60 36 80<b></b></font><b>
		</b></b></p><b><b>
          </b></b></div>
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