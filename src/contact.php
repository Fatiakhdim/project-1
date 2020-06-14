
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../outils/css/main.css">

	<title>Contact</title>

	<style type="text/css">
		.locars {
			border-radius: 10px;
		}
  .inpt{
    
display: block;
width: 80%;
height: calc(1.5em + .75rem + 2px);
font-weight: 400;
line-height: 1.5;
background-clip: padding-box;
margin-bottom: 1rem;
padding-left: 1rem;
  }
  .txtarea{
    margin-top: 1.5em;
    width: 100%;
    height: 220px;
padding-left: 1em;
padding-top: 1em; 
margin-bottom: 2em;   
  }
  .btn{
    margin-top: 1em;
    color: white;
    background: #fab700;
    text-transform: uppercase;
    border: none;
   
  }
  .btn:hover{
    color:#fab700;
    background: white;
    border:1px solid #fab700;
  }
  .contact-us{
   
    margin: 0;
    width: 100%;
    padding: 5em;

  }
  .the-forms{
  	
    display: grid;
    grid-template-columns: 1fr ;

  }


	</style>
</head>

<body>

	<header id="header" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="../index.php"><img class="locars" src="../outils/img/logo.jpg" alt="" title="" width=200px /></a>
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
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Contacter nous
					</h1>

				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->



	<!-- Start contact-page Area -->
<section class="contact-us">
    <div class="the-forms">
      
      <input name="name" placeholder="Entrer Votre Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer Votre Nom'" class="common-input mb-20 form-control" required="" type="text" class="inpt">
      <input name="email" placeholder="Entrer votre Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer votre Email'" class="common-input mb-20 form-control" required="" type="email" class="inpt">
      <input name="subject" placeholder="Entrer votre sujet" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer votre sujet'" class="common-input mb-20 form-control" required="" type="text" class="inpt">
                
      <textarea  name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required="" class="txtarea"></textarea>
      
    </div>
    
    <button class="btn" >Envoyer le Message </button>
  
</section>
	<!-- End contact-page Area -->

	<?php include 'footer.html'; ?>

	
	<!-- START INCLUDE SCRIPT -->
	<script src="../outils/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="../outils/js/vendor/bootstrap.min.js"></script>
	<script src="../outils/js/main.js"></script>
	<!-- END SCRIPT -->

</body>

</html>