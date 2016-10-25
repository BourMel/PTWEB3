<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Vidéo | Vue du Coeur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <!--Introduction des feuilles de style-->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/grille.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/video.css">
</head>

<body>
	<div class="wrapper">
		<!--Introduction header et nav, contenu fixe pour toutes pages-->
		<?php
			require_once("header.html");

			// Récupération des variables
			$content = $_GET['content'] ? $_GET['content'] : null ;

			/*contenu standard*/
			if ($content == "none") {
				print ("<main class='row'>
							<h1>Vidéo</h1>

							<a href='video.php?content=association'>
								<div class='col col3 video__assoc'>
									<h2 class='categTitle'>Les vidéos de l'association</h2>
								</div>
							</a>

							<a href='video.php?content=nathan'>
								<div class='col col3 video__nathan'>
									<h2 class='categTitle'>Les vidéos de Nathan</h2>
								</div>
							</a>
						</main>");

			/*vidéos de l'association*/
			} elseif ($content == "association") {
				print ("<main>
							<a href='video.php?content=nathan'>Voir les vidéos de Nathan</a>
							<h1>Vidéos de l'Association</h1>
						</main>");

			/*vidéos de nathan*/
			} elseif ($content == "nathan") {
				print ("<main>
							<a href='video.php?content=association'>Voir les vidéos de l'association</a>
							<h1>Vidéos de Nathan</h1>
						</main>");
			}
		?>

  </div>

  <div class="background_footer">
      <!--Introduction footer, contenu fixe pour toutes pages. JQUERY inclus.-->
      <?php
        require_once("footer.html");
      ?>
  </div>
</body>
</html>
