<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Actualités | Vue du Coeur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
	<link rel="icon" href="favicon.ico" />
    <!--Introduction des feuilles de style-->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/grille.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/actu.css">
</head>

<body>
	<div class="wrapper">

<!--Introduction header et nav, contenu fixe pour toutes pages-->
<?php
    require_once("header.html");
?>

		<main>
			<!--Menu déroulant d'accès aux archives-->
			<nav class="archives">
				<form action="construction.php" method="post">
					<label for="archives">Accès aux archives</label>
					<select id="archives">
						<option>Janvier
						<option>Février
						<option>Mars
						<option>Avril
						<option>Mai
						<option>Juin
						<option>Juillet
						<option>Août
						<option>Septembre
						<option>Octobre
						<option>Novembre
						<option>Décembre
					</select>
					<select>
						<option>2015
						<option>2016
					</select>
					<button class="slide" type="submit">Voir</button>
				</form>
			</nav>

			<h1  class="deco">Actualités de l'association</h1>

			<section class="row">
				<article class="first col col6">
					<img src="./images/actu_orangerie.jpg" class="articleLink" alt="Sortie à l'Orangerie">
					<div class="first__description">
						<span>1 OCT, 2016</span>
						<h4>Première séance de jeux à l'Orangerie</h4>
						<p>Ils étaient cinq à répondre présents à l’appel de  Clément et Nicolas. Dion, Mathéo, Nael, Nathan et
              Orela. Prêts à vouloir apprendre à se servir du GPS comme leur champion, comme leurs modèles. [...]</p>
						<a href="article_actu.php">Lire la suite</a>
					</div>
				</article>
			</section>

			<section class="row">
				<article class="col col3">
					<img src="./images/actu_juillet.jpg" alt="Rencontre de juillet ">
					<div class="description">
						<span>5 JUIL, 2016</span>
						<h4>Et voici la rencontre du 3 juillet en images</h4>
						<p>Grâce à Yves Wansi, le président de « Vue d’ensemble » qui soutient l’action de « Vue du cœur »
              et qui a accompagné le projet : toute la journée avec sa petite caméra, il [...]</p>
						<a href="article_actu.php">Lire la suite</a>
					</a>
				</article>

				<article class="col col3">
					<img src="./images/actu_cp.jpg" alt="">
					<div class="description">
						<span>3 JUIL, 2016</span>
						<h4>Une rencontre, l’aboutissement d’un beau projet d’année !</h4>
						<p>En ce vendredi matin 1 juillet, à l’école élémentaire de Weitbruch, les élèves du CP de
              Madame Christophe  étaient en émoi et bien impatients de voir arriver leurs invités du jour, [...]</p>
						<a href="article_actu.php">Lire la suite</a>
					</div>
				</article>
			</section>

			<section class="row">
				<article class="col col3">
					<img src="./images/actu_course.jpg" alt="">
					<div class="description">
						<span>14 JUIN, 2016</span>
						<h4>Des graines de champions parmi les champions !</h4>
						<p>Ils s’appellent Dione, Laurine, Naël, Nathan et Orella, des jeunes déficients visuels qui ont
              participé au trail du Kochersberg avec les quelques 800 coureurs qui étaient inscrits ce samedi 11 juin. [...]</p>
						<a href="article_actu.php">Lire la suite</a>
					</div>
				</article>

				<article class="col col3">
					<img src="./images/actu_kermesse.jpg" alt="">
					<div class="description">
						<span>8 JUIN, 2016</span>
						<h4>« Vue du coeur » présente à la kermesse de l’école</h4>
						<p>De Weitbruch, ce vendredi 3 juin. La tête et les jambes étaient sollicitées. Donc 11 ateliers de
              sport, de mathématiques, de blasons, de la bibliothèque et... un atelier  d’initiation au braille. [...]</p>
						<a href="article_actu.php">Lire la suite</a>
					</div>
				</article>
			</section>
		</main>
	</div>

  		<!--Introduction footer, contenu fixe pour toutes pages. JQUERY inclus.-->
  		<?php
  			require_once("footer.html");
  		?>

</body>
</html>
