<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Blog | Vue du Coeur</title>
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
					<select id="dates">
						<option>2015
						<option>2016
					</select>
					<button class="slide" type="submit">Voir</button>
				</form>
			</nav>

			<h1 class="deco">Blog de Nathan</h1>

			<div class="row">
				<article class="first col col6">
					<a href="article_blog.php" class="col col6 lien__image"><img src="./images/blog_merci.jpg" alt=""></a>
					<div class="col col6 first__description">
						<span>19 SEPT, 2015</span>
						<h4>Nathan vous dit merci</h4>
						<p>A tout ceux qui étaient présents mardi pour la soirée de sensibilisation, Nathan vous dit tout simplement merci. Il a [...]</p>
						<a href="article_blog.php">Lire la suite</a>
					</div>
				</article>
			</div>

			<div class="row">
				<article class="col col3">
					<a href="article_blog.php" class="col col6 lien__image"><img src="./images/actu_orangerie.jpg" alt=""></a>
					<div class="col col6 description">
						<span>20 SEPT, 2016</span>
						<h4>"Vue du Coeur" fait sa rentrée : le calendrier</h4>
						<p>Ils s’appellent Dione, Laurine, Naël, Nathan et Orella, des jeunes déficients visuels qui ont participé au trail du Kochersberg avec les quelques 800 coureurs qui étaient inscrits ce samedi 11 juin [...]</p>
						<a href="article_blog.php">Lire la suite</a>
					</div>
				</article>

				<article class="col col3">
					<a href="article_blog.php" class="col col6 lien__image"><img src="./images/actu_orangerie.jpg" alt=""></a>
					<div class="col col6 description">
						<span>20 SEPT, 2016</span>
						<h4>"Vue du Coeur" fait sa rentrée : le calendrier</h4>
						<p>Ils s’appellent Dione, Laurine, Naël, Nathan et Orella, des jeunes déficients visuels qui ont participé au trail du Kochersberg avec les quelques 800 coureurs qui étaient inscrits ce samedi 11 juin [...]</p>
						<a href="article_blog.php">Lire la suite</a>
					</div>
				</article>
			</div>

			<div class="row">
				<article class="col col3">
					<a href="article_blog.php" class="col col6 lien__image"><img src="./images/actu_orangerie.jpg" alt=""></a>
					<div class="col col6 description">
						<span>20 SEPT, 2016</span>
						<h4>"Vue du Coeur" fait sa rentrée : le calendrier</h4>
						<p>Ils s’appellent Dione, Laurine, Naël, Nathan et Orella, des jeunes déficients visuels qui ont participé au trail du Kochersberg avec les quelques 800 coureurs qui étaient inscrits ce samedi 11 juin [...]</p>
						<a href="article_blog.php">Lire la suite</a>
					</div>
                </article>


				<article class="col col3">
					<a href="article_blog.php" class="col col6 lien__image"><img src="./images/actu_orangerie.jpg" alt=""></a>
					<div class="col col6 description">
						<span>20 SEPT, 2016</span>
						<h4>"Vue du Coeur" fait sa rentrée : le calendrier</h4>
						<p>Ils s’appellent Dione, Laurine, Naël, Nathan et Orella, des jeunes déficients visuels qui ont participé au trail du Kochersberg avec les quelques 800 coureurs qui étaient inscrits ce samedi 11 juin...</p>
						<a href="article_blog.php">Lire la suite</a>
					</div>
                </article>
            </div>
        </main>
    </div>

  		<!--Introduction footer, contenu fixe pour toutes pages. JQUERY inclus.-->
  		<?php
  			require_once("footer.html");
  		?>

</body>
</html>
