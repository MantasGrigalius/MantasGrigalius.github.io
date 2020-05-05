<!DOCTYPE html>
<html lang="lt">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>

<!-- Navigation -->
	<?php $page = 'placiaformate'; include 'includes/navbar.php'; ?>
<!-- image carousel -->	
<div class="container-fluid padding">
<div class="row welcome text-center">
	  <div class="col-12">
	  <h2>Plačiaformatė spauda</h2>
	  <h3>Drobės</h3>
	  </div>
	  <hr>
</div>
</div>

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

		</div>
	</div>
	<div class="carousel-item text-center">
		<img src="img/saruno/background1.jpg">
	</div>

</div>
</div>

<div class="container-fluid padding">
<div class="row welcome text-center">
	  <div class="col-12">
	  <h3>Tentai</h3>
	  </div>

	  <hr>
</div>
	  	<div class="p-lg-6 text-center">
		<img src="img/saruno/tentas.jpg" class="img-fluid">
	</div>
<div class="row welcome text-center">
	  <div class="col-12">
	  <hr>
	  <h3>Lipdukai</h3>
	  </div>

	  
	
</div>
	<div id="slides3" class = "carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
	<li data-target="#slides3" data-slide-to="0" class="active"></li>
	<li data-target="#slides3" data-slide-to="1"></li>
	</ul>
	<div class="carousel-inner1">
	<div class="carousel-item text-center active">
		<img class="img-fluid" src="img/saruno/lipdukas1.jpg">

	</div>
	<div class="carousel-item text-center">
		<img src="img/saruno/lipdukas2.jpg">
	</div>

	</div>
	  <a class="carousel-control-prev" href="#slides3" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slides3" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
	</div>
</div>
<div class="row welcome text-center">
	  <div class="col-12">
	  <hr>
	  <h3>Plakatai</h3>
	  </div>

	  
	
</div>
	<div id="slides4" class = "carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
	<li data-target="#slides4" data-slide-to="0" class="active"></li>
	<li data-target="#slides4" data-slide-to="1"></li>
	<li data-target="#slides4" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner1">
	<div class="carousel-item text-center active">
		<img class="img-fluid" src="img/saruno/plakatai1.jpg">

	</div>
	<div class="carousel-item text-center">
		<img src="img/saruno/plakatai2.jpg">
	</div>
	<div class="carousel-item text-center">
		<img src="img/saruno/plakatai3.jpg">
	</div>
	</div>
	  <a class="carousel-control-prev" href="#slides4" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slides4" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
	</div>
	
</div>
<div class="row welcome text-center">
<hr>
</div>
<!--- Footer -->
<?php include 'includes/scripts.php'; ?>
	<?php include 'includes/footer.php'; ?>



</body>
</html>