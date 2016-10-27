<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Vue du Cœur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
	<link rel="icon" href="favicon.ico" />
    <!--Introduction des feuilles de style-->
	<link rel="stylesheet" href="template/css/reset.css">
    <link rel="stylesheet" href="template/css/font-awesome.min.css">
	<link rel="stylesheet" href="template/css/grille.css">
    <link rel="stylesheet" href="template/css/style.css">
    <link rel="stylesheet" href="template/css/index.css">
</head>

<body>

<!--Dans les autres pages, qui sont toutes au même emplacement, on introduira
le header via header.html-->

	<header>
		<nav class="indexMenu">
			<ul>
				<li><a href="template/accueil.php">Accueil</a></li>
				<li><a href="template/actu.php">Actualités de l'association</a></li>
				<li><a href="template/blog.php">Blog de Nathan</a></li>
				<li><a href="template/video.php?content=none">Vidéos</a></li>
				<li><a href="template/contact.php">Contact</a></li>
			</ul>
			
			<div class="fa fa-bars" id="burger"></div> <!--menu hamburger-->
			<img class="indexLogo" src="template/images/logo.png" alt="Logo de Vue du Coeur">	
		</nav>	
		
		<main class="about">
			<h1>Vue du Cœur</h1>
			<p class="explain">Nous sommes une association qui vient en aide aux enfants non-voyants.</p>
			<p class="enterSite"><a class="slide" href="./template/accueil.php">Accès au site</a></p>
		</main>
	</header>
	
</body>
</html>
