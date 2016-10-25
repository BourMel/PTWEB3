<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Contact | Vue du Coeur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <!--Introduction des feuilles de style-->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/grille.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contact.css">
</head>

<body>
	<div class="wrapper">
		<!--Introduction header et nav, contenu fixe pour toutes pages-->
		<?php
			require_once("header.html");
		?>

			<main class="row">
				<h1>Contact</h1>
				
				<section class="col col3">
					<a href="construction.php">
						<div class="adhesion__img">
							<h3 class="adhesion__title">Adhérer à l'association</h3>
						</div>
					</a>
					<article class="about">
						<h4>Qui sommes-nous ?</h4>
						<p>Une association qui vient en aide aux enfants non-voyants. Nathan nous guide et à travers lui nous découvrons ensemble le monde de la non-voyance.</p>
						<h4>Que faisons-nous ?</h4>
						<ul class="adhesion__list">
							<li>Fabrication de matériels adaptés</li>
							<li>Achat de matériels spécialisés</li>
							<li>Prêt de ces matériels</li>
							<li>Sensibilisation à la non-voyance</li>
						</ul>
					</article>
				</section>
				
				<hr/>
				
				<section class="col col3">
					<form method="" action="construction.php">
						<fieldset>
							<label class="contact__label" for="nom">Votre nom</label>
							<input class="contact__input" name="nom" id="nom">
							<label class="contact__label" for="prenom">Votre prénom</label>
							<input class="contact__input" name="prenom" id="prenom">
							<label class="contact__label" for="email">Votre adresse email</label>
							<input class="contact__input" name="email" id="email">
						<fieldset>
						<fieldset>
							<label class="contact__label" for="objet">Objet du message</label>
							<input class="contact__input" name="objet" id="objet">
							<label class="contact__label" for="message">Corps du message</label>
							<textarea name="message" id="message"></textarea>
						</fieldset>
						
						<button type="submit" class="contact__button">Envoi</button>
					</form>
				</section>
				
			</main>


		<!--Introduction footer, contenu fixe pour toutes pages JQUERY inclus.-->
		<?php
			require_once("footer.html");
		?>
	</div>

</body>
</html>
