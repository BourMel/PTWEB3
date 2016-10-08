<!DOCTYPE html>
<html lang="fr">

<!--Est-ce qu'on prend les articles d'une base de données ?-->

<head>
    <title>Accueil | Vue du Coeur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <!--Introduction des feuilles de style-->
	<link rel="stylesheet" href="template/css/reset.css">
    <link rel="stylesheet" href="template/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/css/style.css">
    <link rel="stylesheet" href="template/css/index.css">
</head>

<body>

<!--Dans les autres pages, qui sont toutes au même emplacement, on introduira
le header via header.html-->

	<header>
		<nav>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="template/actu.php">Actualités de l'association</a></li>
				<li><a href="template/blog.php">Blog de Nathan</a></li>
				<li><a href="template/video.php">Vidéos</a></li>
				<li><a href="template/contact.php">Contact</a></li>
			</ul>			
		</nav>
		
		<h1>vueducoeur.org</h1>
		<img src="template/images/logo.png">
		
		<h3>
			L'essentiel est invisible pour les yeux
			<span>- Antoine de Saint-Exupéry</span>
		</h3>
	</header>
	
<!--Vérifier si l'ajout de séparation rend le site + accessible-->
<hr/>
	
	<main>
		<h1>Accueil</h1>
		
		<hr/>
		
		<section class="news">
			<h2>Nouveautés</h2>
			
			<article>
				<h4>Blog</h4>
				<img src="">
				<span>28 SEPT, 2016</span>
				<h3>Kombissiri au cinéma Le VOX</h3>
			</article>

			<article>
				<h4>Blog</h4>
				<img src="">
				<span>28 SEPT, 2016</span>
				<h3>Kombissiri au cinéma Le VOX</h3>
			</article>
			
			<article>
				<h4>Blog</h4>
				<img src="">
				<span>28 SEPT, 2016</span>
				<h3>Kombissiri au cinéma Le VOX</h3>
			</article>
		</section>
		
		<hr/>
		
		<section class="us">
			<h2>A propos de Vue du Coeur</h2>
			
			<h3>Il était une fois un petit bonhomme…</h3>
			<p>Nathan est né en 2007 en créant la surprise : il ne verrait jamais car ses nerfs optiques étaient trop fins pour laisser passer une quelconque information à son cerveau.</p>
			
			<h3>…extraordinaire…</h3>
			<p>Mais bien vite ses parents se sont rendu compte qu’il pouvait voir avec son cœur !</p>
			<p>Convaincus, amis et proches de la famille se sont dit que quelques paires de bras supplémentaires ne seraient pas superflues pour lui permettre de développer son don et expliquer aux autres de quoi il retourne.</p>
			
			<h3>et des gens pas moins ordinaires.</h3>
			<p>Et c’est ainsi que nous avons décidé de créer l’association Vue du cœur : à plusieurs, ça devient une aventure, là où seuls cela peut être la galère.</p>
			<p>Depuis avril 2012, Nathan nous guide et à travers lui nous découvrons ensemble le monde de la non-voyance. Nous essayons de sensibiliser à cette différence et de partager nos expériences.</p>
			<p>Bien sur, l’association cherche des fonds afin de financer les onéreux matériels et livres adaptés. Mais aucune somme d’argent ne remplacera l’ingéniosité, les trucs et astuces, et les conseils de ceux qui œuvrent de leur main pour palier le manque de ce qui pour les enfants ordinaires est tout simplement normal.</p>
			
			<strong>Pour Nathan et pour les autres.</strong>		
		</section>
	</main>
	
	<!--Introduction footer, contenu fixe pour toutes pages. JQUERY inclus.-->
	<?php
		require_once("template/footer.html");
	?>
	
</body>
</html>
