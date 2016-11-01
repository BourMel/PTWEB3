<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Accueil | Vue du Coeur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
	<link rel="icon" href="favicon.ico" />
    <!--Introduction des feuilles de style-->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="./css/grille.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/accueil.css">
</head>

<body>
	<div class="wrapper">

<!--Introduction header et nav, contenu fixe pour toutes pages-->
<?php
    require_once("header.html");
?>

<!--V�rifier si l'ajout de s�paration rend le site + accessible-->
<hr/>

		<main>
			<h1 class="deco">En construction</h1>

			<p>Oups ! Il semble que cette page n'existe pas encore.</p>
			<a class="slide" href="contact.php">Nous contacter</a>
		</main>
	</div>

  		<!--Introduction footer, contenu fixe pour toutes pages. JQUERY inclus.-->
  		<?php
  			require_once("footer.html");
  		?>

</body>
</html>
