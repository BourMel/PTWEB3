<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Vidéo | Vue du Coeur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <!--Introduction des feuilles de style-->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
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

			if ($content = "none") {
				print ("<main>
							<h1>Vidéo</h1>
							<a href='video.php?content=association'>Association</a>
							<a href='video.php?content=nathan'>Nathan</a>
						</main>");
				
			} elseif ($content = "association") {
				print ("<main>
							<a href='video.php?content=nathan'>Nathan</a>
							<h1>Vidéos de l'Association</h1>
						</main>");
				
			} elseif ($content = "nathan") {
				print ("<main>
							<a href='video.php?content=association'>Association</a>
							<h1>Vidéos de Nathan</h1>
						</main>");
			}
			
			print("$content");

		/* Introduction footer, contenu fixe pour toutes pages JQUERY inclus */

			require_once("footer.html");
		?>
	</div>
</body>
</html>
