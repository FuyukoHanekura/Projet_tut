<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="imgsrc/favicon.ico">
		<title>Unichamps</title>
		<link rel="stylesheet" href="styles.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<!-- POLICES  -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300&display=swap" rel="stylesheet">
		<!-- POLICE POUR LE MESSAGE AU MILIEUX DU HOME -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<script src="script.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-darkc container-fluid">
			<div class="container-fluid">
				<a class="navbar-brand text-white" href="index.php"><img src="imgsrc/logo.png" style=" padding-left: 15px; height: 110px;" /></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="actu/actu.php">Actu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="direct/direct.php">Direct</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active text-white" href="scoringPoint/scoringPoint.php" tabindex="-1" aria-disabled="true">Classement</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link active text-white" href="contact/contact.php" tabindex="-1" aria-disabled="true">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active text-white" href="https://discord.gg/6DAZJdRbkk" tabindex="-1" aria-disabled="true" id="contact" target="_blank">Inscrit toi !</a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- VIDEO HOME -->
		<div id="welcome-vid">
			<video width="auto" height="auto" autoplay muted loop>
				<source src="imgsrc/videohome.mp4" type="video/mp4">
			</video>
			<h1 id="welcome">Toutes nos VODS sont disponible sur Youtube !</h1>
		<footer id="footer" class="bg-darkc container-fluid ">
			<div class="carourou">
				<a href="https://www.univ-paris13.fr/sport/" target="_blank"> <img src="./imgsrc/daps-logo.png" alt="logo du DAPS" title="logo du DAPS"></a>
				<a href="https://iutb.univ-paris13.fr" target="_blank"> <img src="./imgsrc/iut logo.png" alt="logo de l'iut de bobigny" title="logo de l'iut de bobigny"></a>
				<a href="https://sport-u-iledefrance.com" target="_blank"> <img src="./imgsrc/ffsport.png" alt="logo du FFSPORT " title="logo du FFSPORT "></a>
				<a href="https://www.univ-paris13.fr" target="_blank"> <img src="./imgsrc/paris13.png" alt="logo de l'université sorbonne paris 13" title="logo de l'université sorbonne paris 13"></a>
			</div>
		</footer>
	</body>
</html>
