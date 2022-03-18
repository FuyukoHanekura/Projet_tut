<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-icon" href="media/logo-studio.png">
		<title>Uniplay</title>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<!-- CSS -->
		<link rel="stylesheet" href="style/style.css" />
		<link rel="stylesheet" href="style/navbar.css" />
		<!-- Carousel de site -->
		<link rel="stylesheet" href="/flickity-docs/flickity.css" />
		<script src="./inc/flickity-docs/flickity.pkgd.js"></script>
		<!-- jS -->
		<script src="./js/paralux.js"></script>
		<!-- FONT -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Krona+One&family=Zen+Dots&display=swap" rel="stylesheet">
	</head>

	<body onload="document.getElementsByTagName('body')[0].style.display = 'block';" style="display:none;">
		<?php
		include 'inc/header.php';
		?>
		<div id="nomobile">
			<div class="Iframe-Master-CC-and-Rs set-margin set-padding set-border set-box-shadow center-block-horiz">
				<div class="responsive-wrapper 
		responsive-wrapper-wxh-572x612" style="-webkit-overflow-scrolling: touch; overflow: auto;">
					<iframe src="media/Charte-graphique-Event.pdf">
					</iframe>
				</div>
			</div>
			<div class="Iframe-Master-CC-and-Rs set-margin set-padding set-border set-box-shadow center-block-horiz">
				<div class="responsive-wrapper 
		responsive-wrapper-wxh-572x612" style="-webkit-overflow-scrolling: touch; overflow: auto;">
					<iframe src="media/uniplay-chartegraphique.pdf">
					</iframe>
				</div>
			</div>
			<div class="Iframe-Master-CC-and-Rs set-margin set-padding set-border set-box-shadow center-block-horiz">
				<div class="responsive-wrapper 
		responsive-wrapper-wxh-572x612" style="-webkit-overflow-scrolling: touch; overflow: auto;">
					<iframe src="media/cdc.pdf">
					</iframe>
				</div>
			</div>
		</div>
		<div id="onlymobile">
			<div id="CG">
				<p>Charte graphique UniPlay</p>
				<a href="./media/uniplay-chartegraphique.pdf" download="img/uniplay-chartegraphique.pdf">Télécharger</a>
				<p>Charte graphique UniChamps</p>
				<a href="./media/Charte-graphique-Event.pdf" download="img/Charte-graphique-Event.pdf">Télécharger</a>
			</div>
		</div>
		<footer>
			<a href="agence.php">autres Agence de l'IUT</a>
		</footer>
	</body>
</html>