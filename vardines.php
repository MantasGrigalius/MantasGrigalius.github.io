<!DOCTYPE html>
<html lang="lt">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
<!-- Navigation -->
	<?php $page = 'vardines'; include 'includes/navbar.php'; ?>
<!-- image carousel -->	
<div class="container-fluid padding">
<div class="row welcome text-center">
	  <div class="col-12">
	  <h2>Vardinės kortelės</h2>
	  <p>Gaminame asmenines vardo korteles su darbuotojo pareigomis ir/ar vardu. Korteles gaminame pagal individualius klientų užsakymus, t.y. įvairių formų, dydžių ir spalvų. Vardinių kortelių tvirtinimas dvejopas: vardinė kortelė gali būti įsegama žiogeliu ar prikabinama magnetine plokštele.</p>
	  </div>
	  </div>
	<div id="slides10" class = "carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
	<li data-target="#slides10" data-slide-to="0" class="active"></li>
	<li data-target="#slides10" data-slide-to="1"></li>
	<li data-target="#slides10" data-slide-to="2"></li>
	<li data-target="#slides10" data-slide-to="3"></li>
	</ul>
	<div class="carousel-inner">
	<div class="carousel-item text-center active">
		<img src="img/saruno/vardines1.jpg">
	</div>
	<div class="carousel-item text-center">
		<img src="img/saruno/vardines2.jpg">
	</div>
	<div class="carousel-item text-center">
		<img src="img/saruno/vardines3.jpg">
	</div>
	<div class="carousel-item text-center">
		<img src="img/saruno/vardines4.jpg">
	</div>

	</div>
	  <a class="carousel-control-prev" href="#slides10" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slides10" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
	</div>
<div class="row welcome text-center">
	  <hr>
</div>


</div>
<!--- Footer -->
	<?php include 'includes/scripts.php'; ?>
	<?php include 'includes/footer.php'; ?>



</body>
</html>