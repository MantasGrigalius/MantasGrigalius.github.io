<!DOCTYPE html>
<html lang="lt">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
<!-- Navigation -->
	<?php $page = 'placiaformate'; include 'includes/navbar.php'; ?>
<!-- image carousel -->	
<div id="slides" class = "carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="1"></li>
</ul>
<div class="carousel-inner">
	<div class="carousel-item text-center active">
        <video class="video-fluid" autoplay muted>
          <source src="img/saruno/Foto drobių gaminimas.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-indigo-light"></div>
		<div class="carousel-caption">
			<h1 class="display-2">Drobė</h1>
			<h3>Foto drobių gaminimas</h3>
			<button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
			<button type="button" class="btn btn-primary btn-lg">Get Started</button>
		</div>
	</div>
	<div class="carousel-item text-center">
		<img src="img/saruno/background1.jpg">
	</div>

</div>
</div>

<!--- Footer -->
	<?php include 'includes/footer.php'; ?>



</body>
</html>