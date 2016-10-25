<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Actualités | Vue du Coeur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
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
				<form action="construction.php" method="">
					<label for="">Accès aux archives</label>
					<select>
						<option>Janvier
						<option>Février
					</select>
					<select>
						<option>2015
						<option>2016
					</select>
					<button type="submit">Voir</button>
				</form>
			</nav>

			<h1>Actualités de l'association</h1>

			<section class="row">
				<article class="first col col6">
					<img src="./images/random.jpg" alt="">
					<div class="first__description">
						<span>20 SEPT, 2016</span>
						<h4>"Vue du Coeur" fait sa rentrée : le calendrier</h4>
						<p>… ils s’appellent Dione, Laurine, Naël, Nathan et Orella, des jeunes déficients visuels qui ont participé au trail du Kochersberg avec les quelques 800 coureurs qui étaient inscrits ce samedi 11 juin...</p>
						<a href="construction.php">Lire la suite</a>
					</div>
				</article>
			</section>

			<section class="row">
				<article class="col col3">
					<img src="./images/random.jpg" alt="">
					<div class="description">
						<span>20 SEPT, 2016</span>
						<h4>"Vue du Coeur" fait sa rentrée : le calendrier</h4>
						<p>… ils s’appellent Dione, Laurine, Naël, Nathan et Orella, des jeunes déficients visuels qui ont participé au trail du Kochersberg avec les quelques 800 coureurs qui étaient inscrits ce samedi 11 juin...</p>
						<a href="construction.php">Lire la suite</a>
					</a>
				</article>

				<article class="col col3">
					<img src="./images/random.jpg" alt="">
					<div class="description">
						<span>20 SEPT, 2016</span>
						<h4>"Vue du Coeur" fait sa rentrée : le calendrier</h4>
						<p>… ils s’appellent Dione, Laurine, Naël, Nathan et Orella, des jeunes déficients visuels qui ont participé au trail du Kochersberg avec les quelques 800 coureurs qui étaient inscrits ce samedi 11 juin...</p>
						<a href="construction.php">Lire la suite</a>
					</div>
				</article>
			</section>

			<section class="row">
				<article class="col col3">
					<img src="./images/random.jpg" alt="">
					<div class="description">
						<span>20 SEPT, 2016</span>
						<h4>"Vue du Coeur" fait sa rentrée : le calendrier</h4>
						<p>… ils s’appellent Dione, Laurine, Naël, Nathan et Orella, des jeunes déficients visuels qui ont participé au trail du Kochersberg avec les quelques 800 coureurs qui étaient inscrits ce samedi 11 juin...</p>
						<a href="construction.php">Lire la suite</a>
					</div>
				</article>

				<article class="col col3">
					<img src="./images/random.jpg" alt="">
					<div class="description">
						<span>20 SEPT, 2016</span>
						<h4>"Vue du Coeur" fait sa rentrée : le calendrier</h4>
						<p>… ils s’appellent Dione, Laurine, Naël, Nathan et Orella, des jeunes déficients visuels qui ont participé au trail du Kochersberg avec les quelques 800 coureurs qui étaient inscrits ce samedi 11 juin...</p>
						<a href="construction.php">Lire la suite</a>
					</div>
				</article>
			</section>
		</main>
	</div>

  <div class="background_footer">
  		<!--Introduction footer, contenu fixe pour toutes pages. JQUERY inclus.-->
  		<?php
  			require_once("footer.html");
  		?>
  </div>

</body>
</html>
