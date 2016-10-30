<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Vidéo | Vue du Coeur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
	<link rel="icon" href="favicon.ico" />
    <!--Introduction des feuilles de style-->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/flickity.css">
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
							<h1 class='deco'>Vidéo</h1>

							<a href='video.php?content=association'>
								<div class='col col3 choixVideo video__assoc'>
									<h2 class='categTitle'>Les vidéos de l'association</h2>
								</div>
							</a>

							<a href='video.php?content=nathan'>
								<div class='col col3 choixVideo video__nathan'>
									<h2 class='categTitle'>Les vidéos de Nathan</h2>
								</div>
							</a>
						</main>");

			/*vidéos de l'association*/
			} elseif ($content == "association") {
				print ("<main>
							<a href='video.php?content=nathan'>Voir les vidéos de Nathan</a>
							<h1 class='deco'>Vidéos de l'Association</h1>

							<h1>A la une</h1>

							<section class='row video__main'>
								<div class='col col4'>
									<video controls class='col col3' src='videos/video.mp4'>Vidéo</video>
								</div>
								<div class='col col3 video__main__description'>
									<span>20 SEPT, 2016</span>
									<h4>Vue du Coeur fait sa rentrée : le calendrier</h4>
									<p>… ils s’appellent Dione, Laurine, Naël, Nathan et Orella, des jeunes déficients visuels qui ont participé au trail du Kochersberg avec les quelques 800 coureurs qui étaient inscrits ce samedi 11 juin...</p>
								</div>
							</section>

							<h1>Vidéos plus anciennes</h1>

							<nav class='row video__list'>
								<ul data-flickity class='carousel'>");
                       
                    for($i=0;$i<15;$i++) {
                        print ("    <li class='carousel-cell'>
										  <img class='col' src='images/video_asso.jpg' alt='autre vidéo'>
										  <div class='video__description'>
											 <span>20 SEPT, 2016</span>
											 <h4>Vue du Coeur fait sa rentrée : le calendrier</h4>
										  </div>
								    </li>");
                    }
                
                    print ("    </ul>
							</nav>
						</main>");

			/*vidéos de nathan*/
			} elseif ($content == "nathan") {
				print ("<main>
							<a href='video.php?content=association'>Voir les vidéos de l'association</a>
							<h1 class='deco'>Vidéos de Nathan</h1>

							<h1>A la une</h1>

							<section class='row video__main'>
								<div class='col col4'>
									<video controls class='col col3' src='videos/video.mp4'>Vidéo</video>
								</div>
								<div class='col col3 video__main__description'>
									<span>20 SEPT, 2016</span>
									<h4>Vue du Coeur fait sa rentrée : le calendrier</h4>
									<p>… ils s’appellent Dione, Laurine, Naël, Nathan et Orella, des jeunes déficients visuels qui ont participé au trail du Kochersberg avec les quelques 800 coureurs qui étaient inscrits ce samedi 11 juin...</p>
								</div>
							</section>

							<h1>Vidéos plus anciennes</h1>

							<nav class='row video__list'>
								<ul data-flickity class='carousel'>");
                       
                    for($i=0;$i<15;$i++) {
                        print ("    <li class='carousel-cell'>
										  <img class='col' src='images/video_asso.jpg' alt='autre vidéo'>
										  <div class='video__description'>
											 <span>20 SEPT, 2016</span>
											 <h4>Vue du Coeur fait sa rentrée : le calendrier</h4>
										  </div>
								    </li>");
                    }
                
                    print ("    </ul>
							</nav>
						</main>");
            }
		?>

  </div>

      <!--Introduction footer, contenu fixe pour toutes pages. JQUERY inclus.-->
      <?php
        require_once("footer.html");
      ?>
</body>
</html>
