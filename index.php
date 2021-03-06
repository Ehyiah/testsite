<?php
require('private.php')
    ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="public/css/materialize.min.css"  media="screen,projection"/>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="public/css/style.css" />
        <title>Matthieu GOSTIAUX</title>
		<!-- favicon -->
		<link rel="icon" type="image/png" href="public/images/favicon.png" />
		<meta name="description" content="Matthieu GOSTIAUX">
		<!-- Open Graph data -->
		<meta property="og:title" content="Matthieu GOSTIAUX" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://cv.gostiaux.net/" />
		<meta property="og:image" content="http://cv.gostiaux.net/images/logo.png" />
		<meta property="og:description" content="Matthieu GOSTIAUX"	/>
		<!-- Twitter Card data -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="Matthieu GOSTIAUX">
		<meta name="twitter:title" content="Matthieu GOSTIAUX">
		<meta name="twitter:description" content="Matthieu GOSTIAUX">
		<meta name="twitter:image" content="http://cv.gostiaux.net/images/logo.png">

		<!-- google captcha -->
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>

    <body>
		<!-- HEADER AVEC MENU -->
			<header>
				<!-- menu classique desktop -->
					<div class="navbar-fixed" id="menuDesktop">
						<nav>
							<a href="http://gostiaux.net" id="logo">
								<img src="public/images/logo.png" alt="Logo du site">
							</a>

							<!-- contenu menu déroulant pour les épisodes -->
								<ul id="dropdown1" class="dropdown-content">
									<li><a href="#projets">Mes projets</a></li>
									<li><a href="#contact">Me contacter</a></li>
								</ul>
								
							<ul class="right hide-on-med-and-down" id="menuDroit">
								<li><a href="http://gostiaux.net"><i class="material-icons left">home</i>Accueil</a></li>
								<li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons left">local_library</i>Menu<i class="material-icons right">arrow_drop_down</i></a></li>

							</ul>
						</nav>
					</div>

				<!-- menu mobile responsive -->
					<div id="menuMobile">
						<nav>
							<div class="nav-wrapper" class="navbar-fixed">
									<a href="http://cv.gostiaux.net" id="logo">
										<img src="public/images/logo.png" alt="Logo du site">
									</a>
									<a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
							</div>
						</nav>
							<!-- elements du menu responsive -->
								<ul id="dropdown2" class="dropdown-content">
									<li><a href="#projets">Mes projets</a></li>
									<li><a href="#contact">Me contacter</a></li>
								</ul>

							<ul class="sidenav" id="mobile-menu">
								<li><a href="http://cv.gostiaux.net">Accueil</a></li>
								<li><a href="#!" class="dropdown-trigger" data-target="dropdown2">Menu</a></li>

							</ul>
					</div>
			</header>


		<!-- CONTENU CENTRAL DU SITE -->
			<!--
			<div class="parallax-container">
      			<div class="parallax"><img src="public/images/05.jpeg"></div>
			</div>
			-->
			<div id="loader">

			</div>

			
			<div id="particles-js"></div> 

			<div class="section white" id="desc">
				<div class="row container">
					<h2 class="center-align animDev">Développeur Web Junior</h2>

					  

					  <!-- Modal Trigger -->
					  <div class="center-align">
							<a class="waves-effect waves-light btn CVDL" href="public/MatthieuGostiauxDevWeb.pdf" target="_blank"><i class="material-icons right">cloud</i>Telecharger mon CV</a>
							<!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Voir mon CV</a> -->
					  </div>

						<!-- Modal Structure -->
						<div id="modal1" class="modal modal-fixed-footer">
							<div class="modal-content">
							<h4>Mon CV</h4>
							<p>Voici mon CV que vous pouvez également télécharger en format PDF</p>
								<!-- <iframe src="public/MatthieuGostiauxDevWeb.pdf" width="600" height="800" align="middle"></iframe> -->
								<object data="public/MatthieuGostiauxDevWeb.pdf" type="application/pdf" width="600" height="800">
									lien alternatif : <a href="public/MatthieuGostiauxDevWeb.pdf">MonCv.pdf</a>
								</object>
							</div>
							<div class="modal-footer">
							<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Télécharger</a>

							<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Fermer</a>
							</div>
						</div>






					  <h5 class="center-align" class="grey-text text-darken-3 lighten-3">Développeur Web : <strong>HTML5, CSS, Javascript, PHP et Mysql. </strong>
						</br>Vous trouverez ci-dessous un descriptif de mes projets réalisés et les liens permettant de les visiter</h5>
					<p class="center-align" class="grey-text text-darken-3 lighten-3" id="TYPED">Utilisation de CMS <strong>Wordpress</strong> et de Framework <strong>Symfony</strong> Mais encore <strong>Bootstrap ou Materialize</strong></p>

				</div>
			</div>

			<div class="container" id="projets">
				<div class="row">
					<!-- premier projet -->
					<div class="col xl7 hvr-grow">
						<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="public/images/projets/projet1/01.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Intégration de maquette<i class="material-icons right">more_vert</i></span>
							<p><a href="http://projet1.gostiaux.net" target="_blank">Visiter ce site</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Intégration réalisée à partir d'une maquette fournie<i class="material-icons right">close</i></span>
							<p>
							Site statique réalisé en HTML5, CSS et Javascript pour les animations.
								</br>
							Il s'agit pour ce site de réaliser l'intégration d'une maquette de manière fidèle à l'aide des technologies HTML5 et CSS.
								</br>

							</p>
							
							<p><a href="http://projet1.gostiaux.net" target="_blank">Visiter ce site</a></p>

						</div>
						</div>
					</div>

					<div class="col xl4 offset-xl1 reveal" id="icones-projet1">
						<div class="row">
							<img class="responsive-img col s6 offset-s3 hvr-grow" title="Responsive Design" src="public/images/logo/responsive.png">
						</div>
						<div class="row"> 
							<img class="responsive-img col s4 hvr-grow" src="public/images/logo/html5.png" title="HTML-5" alt="Logo HTML 5">
							<img class="responsive-img col s4 hvr-grow" src="public/images/logo/css3.png" title="CSS-3" alt="Logo CSS 3">
							<img class="responsive-img col s4 hvr-grow" src="public/images/logo/javascript.png" title="Javascript" alt="Logo Javascript">
						</div>
					</div>
					
				</div>


				  
				<!-- deuxieme projet -->
				<div class="row" id="second">
					<div class="col xl7 hvr-grow" id="projet2">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="public/images/projets/projet2/01.png">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">Création d'un thème Wordpress<i class="material-icons right">more_vert</i></span>
								<p><a href="http://projet2.gostiaux.net" target="_blank">Visiter ce site</a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Création d'un thème Wordpress personnalisé<i class="material-icons right">close</i></span>
								<p>Personnalisation d'un thème Wordpress présentant la ville de Strasbourg.
									</br>
								Il est également possible de réaliser une réservation dans l'une des différentes activités listées.
									</br>
								L'interface d'administration de Wordpress a également était personnalisée pour afficher ou masquer certaines informations et fichiers de configuration
								suivant le niveau d'autorisation des utilisateurs.
									</br>
								Et cela dans le but d'éviter des manipulations néfastes et involontaires.

								</p>

								<p><a href="http://projet2.gostiaux.net" target="_blank">Visiter ce site</a></p>

							</div>
						</div>
					</div>

					<div class="col xl4 reveal" id="icones-projet1">
						<div class="row">
							<img class="responsive-img col s6 offset-s3 hvr-grow" title="Responsive Design" src="public/images/logo/responsive.png">
						</div>
						<div class="row"> 
							<img class="responsive-img col s4 offset-s2 hvr-grow" src="public/images/logo/wordpress.png" title="Wordpress" alt="Logo Wordpress">
							<img class="responsive-img col s4 hvr-grow" src="public/images/logo/php.png" title="PHP" alt="Logo PHP">
						</div>
					</div>

				</div>
			</div>	<!-- fin container -->

			<div class="parallax-container">
					<div class="parallax"><img src="public/images/01.jpg"></div>
			</div>

			<div class="container">
				<div class="row">
					<!-- troisime projet -->
					<div class="col xl7 hvr-grow">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="public/images/projets/projet3/01.png">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">Réalisation d'une application en Javascript<i class="material-icons right">more_vert</i></span>
								<p><a href="http://projet3.gostiaux.net" target="_blank">Visiter ce site</a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Réalisation d'une application de réservation en Javascript<i class="material-icons right">close</i></span>
								<p>Ce site vous permet de réaliser la réservation d'un vélo dans la ville de Lyon.
									</br>
								Pour cela, l'application récupère <strong>en temps réel </strong>les informations depuis l'API JCDecaux indiquant le nombre de vélos disponibles dans chaque station.
									</br>
								Chaque station est représentée par un drapeau dont la couleur est un indicateur du nombre de vélos restants dans la station.
									</br>
								Il n'est possible de réserver qu'un seul vélo à la fois et celle-ci expire automatiquement aprés un délai de 20 minutes.
									</br>
									<div class="divider"></div>
								<em>(la réservation n'a aucun effet réel sur les vélos disponibles dans la station.)</em>

								</p>
								<p><a href="http://projet3.gostiaux.net" target="_blank">Visiter ce site</a></p>

							</div>
						</div>
					</div>

					<div class="col xl4 offset-xl1 reveal" id="icones-projet1">
						<div class="row">
							<img class="responsive-img col s6 offset-s3 hvr-grow" title="Responsive Design" src="public/images/logo/responsive.png">
						</div>
						<div class="row"> 
							<img class="responsive-img col s3 hvr-grow" src="public/images/logo/html5.png" title="HTML-5" alt="Logo HTML 5">
							<img class="responsive-img col s3 hvr-grow" src="public/images/logo/css3.png" title="CSS-3" alt="Logo CSS 3">
							<img class="responsive-img col s3 hvr-grow" src="public/images/logo/javascript.png" title="Javascript" alt="Logo Javascript">
							<img class="responsive-img col s3 hvr-grow" src="public/images/logo/api.png" title="API" alt="Logo API">
						</div>
					</div>
				</div>

				<div class="row">
					<!-- quatrieme projet -->
					<div class="col xl7 hvr-grow" id="projet4">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="public/images/projets/projet4/01.png">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">Réalisation d'un blog pour écrivain<i class="material-icons right">more_vert</i></span>
								<p><a href="http://projet4.gostiaux.net" target="_blank">Visiter ce site</a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Création d'un blog pour écrivain<i class="material-icons right">close</i></span>
								<p>Ce site permet de publier facilement et de manière totalement intuitive pour quelqu'un de non initié au HTML cela grâce à une interface WYSIWYG.
									</br>
								Il est possible de s'enregistrer dans un espace membre et
								il est également possible pour les membres de poster des commentaires sur les articles publiés, de les signaler afin qu'ils puissent être modérés dans l'interface
								d'administration disponible pour les administrateurs du site.
									</br>
								De même, la modification ou la suppression d'un épisode se réalise trés simplement.
								</p>
									<div class="divider"></div>
								<p>Pour tester les fonctionnalités de ce site pleinement, Vous pouvez me demander l'accès à un compte administrateur vous donnant accès à toutes les fonctionnalités de l'espace membre.
									Afin de créer, modifier, supprimer des épisodes, ou de poster, signaler les commentaires et de les modérer.
									</br>
									<!-- 
								<strong>Identifiant : </strong>administrateur </br>
								<strong>Mot de passe : </strong>test
									-->
								</p>

								<p><a href="http://projet4.gostiaux.net" target="_blank">Visiter ce site</a></p>

							</div>
						</div>
					</div>

					<div class="col xl4 reveal" id="icones-projet1">
							<div class="row">
								<img class="responsive-img col s6 offset-s3 hvr-grow" title="Responsive Design" src="public/images/logo/responsive.png">
							</div>
							<div class="row"> 
								<img class="responsive-img col s4 hvr-grow" src="public/images/logo/html5.png" title="HTML-5" alt="Logo HTML 5">
								<img class="responsive-img col s4 hvr-grow" src="public/images/logo/css3.png" title="CSS-3" alt="Logo CSS 3">
								<img class="responsive-img col s4 hvr-grow" src="public/images/logo/javascript.png" title="Javascript" alt="Logo Javascript">
							</div>
							<div class="row">
								<img class="responsive-img col s4 offset-s2 hvr-grow" src="public/images/logo/mysql.png" title="MySQL" alt="Logo MySQL">
								<img class="responsive-img col s4 hvr-grow" src="public/images/logo/php.png" title="PHP" alt="Logo PHP">
							</div>
						</div>


				</div>
			</div>

			<div class="parallax-container">
					<div class="parallax"><img src="public/images/03.jpeg"></div>
			</div>
				
			<div class="container">
				<div class="row">
					<!-- cinquieme projet -->
					<div class="col xl7 hvr-grow">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="public/images/projets/projet5/01.png">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">Réalisation d'un site de gestion de collections sous Symfony 4<i class="material-icons right">more_vert</i></span>
								<p><a href="http://projet5.gostiaux.net" target="_blank">Visiter ce site</a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Création d'un site de gestion de collections<i class="material-icons right">close</i></span>
								<p>Site permettant de gérer des collections diverses à l'aide d'une interface agréable et intuitive.
								</br>
									Ce site utilise diverses technologies comme : HTML5, CSS, Javascript, Symfony 4 et Bootstrap.
									Les collections sont stockées dans une Base de données MySql.
								</br>
									Les bonnes pratiques de Symfony ont été respectées.
								</p>										
									<div class="divider"></div>
								<p>
									L'utilisateur de cette application Symfony a la possibilité de créer un compte afin de gérer ses Collections et de les classer en différentes Catégories.
									</br>
									Il peut ensuite ajouter des images d'illustration facilement à chacun de ces éléments.


								</p>


								<p><a href="http://projet5.gostiaux.net" target="_blank">Visiter ce site</a></p>

							</div>
						</div>
					</div>

					<div class="col xl4 offset-xl1 reveal">
						<div class="row">
							<img class="responsive-img col s6 offset-s3 hvr-grow" title="Responsive Design" src="public/images/logo/responsive.png">
						</div>
						<div class="row"> 
							<img class="responsive-img col s3 hvr-grow" src="public/images/logo/symfony.png" title="Symfony" alt="Logo Symfony">
							<img class="responsive-img col s3 hvr-grow" src="public/images/logo/php.png" title="PHP" alt="Logo PHP">
							<img class="responsive-img col s3 hvr-grow" src="public/images/logo/bootstrap.png" title="Bootstrap" alt="Logo Bootstrap">
							<img class="responsive-img col s3 hvr-grow" src="public/images/logo/javascript.png" title="Javascript" alt="Logo Javascript">
						</div>
						<div class="row"  id="icones-projet5-row2">
							<img class="responsive-img col s3 offset-s2 hvr-grow" src="public/images/logo/twig.png" title="Twig Templates" alt="Logo Twig">
							<img class="responsive-img col s3 hvr-grow" src="public/images/logo/mysql.png" title="MySQL" alt="Logo MySql">
							<img class="responsive-img col s3 hvr-grow" src="public/images/logo/doctrine.png" title="MySQL" alt="Logo MySql">
						</div>
					</div>

				</div>

			</div>


		<!-- FOOTER -->
			<footer class="page-footer" id="contact">
				<div class="container">
					<div class="row">
						<div class="col s12 xl4" id="contact-card">
							<div class="card blue-grey darken-1">
								<div class="card-content white-text">
									<span class="card-title">Me contacter</span>
										<p>Vous pouvez me contacter par téléphone :</br> 06 09 36 50 66</p>
								</div>
								<div class="card-action">
									<p>Ou par e-mail : matthieu@gostiaux.net</p>
									<a href="mailto:matthieu@gostiaux.net">Envoyez-moi un e-mail</a>
								</div>
							</div>
						</div>

						<div class="col s12 xl4">
							<!-- formulaire de contact -->
							<div id="contact-form">
								<form method="POST" action="traitement.php">
									<h5 class="center-align" id="contact-text">Sinon, vous pouvez me contacter directement</h5>
									<div class="input-field">
										<input type="text" name="nom" id="nom" class="validate">
										<label for="nom">Votre nom :</label>
									</div>
									<div class="input-field">
										<input type="email" name="email" id="email" class="validate">
										<label for="email">Votre mail :</label>
									</div>
									<div class="input-field">
										<input type="tel" name="tel" id="tel">
										<label for="tel">Votre numéro :</label>
									</div>
									<div class="input-field">
										<textarea id="text-area" name="text-area" class="materialize-textarea"></textarea>
										<label for="text-area">Votre message :</label>
									</div>

									<div class="g-recaptcha" data-sitekey="<?=$privateKey?>"></div>
									
									<div  id="contact-button">
										<button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
												<i class="material-icons right">send</i>
										</button>
									</div>
								</form>
							</div>
							<!-- fin formulaire contact-->
						</div>
						<div class="col s12 xl4">
							<blockquote>
								<p class="center-align">Titulaire d'un Master 2 de recherche en Droit Privé et Sciences Criminelles, j'ai choisi de me reconvertir dans un domaine qui me passionne.
									C'est pourquoi j'ai décidé d'obtenir le diplome de 
									Développeur Web Junior dispensé par OpenClassRooms en partenariat avec la 3W Academy.
								</p>
							</blockquote>
						</div>
					</div>
				</div>
					<div class="footer-copyright">
						<div class="container">
							<p class="center-align">©  2019, Matthieu GOSTIAUX </p>
						</div>
					</div>
			</footer>




		<!-- SCRIPTS -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	<!-- JQuery -->
			<script type="text/javascript" src="public/js/materialize.min.js"></script>					<!-- Materialize -->
			<script type="text/javascript" src="public/js/particles.min.js"></script>					<!-- particules -->
			<script src="https://unpkg.com/scrollreveal"></script>										<!-- scroll revealing -->
			<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>							<!-- typed script-->
			<script src="public/js/main.js"></script> 													<!-- JS d'initialisation -->

    </body>
</html>
