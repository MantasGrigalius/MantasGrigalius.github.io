<nav class="navbar expand navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
	<a class="navbar-brand" href"#"><img src="img/saruno/logo.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link <?php if($page == 'home'){echo 'active';}?>" href="http://localhost/Saruno/index.php">Pradžia</a>
				</li>

			<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php if($page == 'placiaformate'){echo 'active';}?>" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reklama
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://localhost/Saruno/placiaformate.php">Plačiaformatė spauda</a>
          <a class="dropdown-item" href="http://localhost/Saruno/vizualine.php">Vizualinė reklama</a>
          <a class="dropdown-item" href="http://localhost/Saruno/vardines.php">Vardinės kortelės</a>
		  <a class="dropdown-item" href="http://localhost/Saruno/plotai.php">Reklamos plotų nuoma</a>
		  <a class="dropdown-item" href="http://localhost/Saruno/priekabos.php">Reklaminės priekabos nuoma</a>
		  <a class="dropdown-item" href="http://localhost/Saruno/veliavos.php">Vėliavos</a>
        </div>
		</li>
			<li class="nav-item">
				<a class="nav-link <?php if($page == 'graviravimas'){echo 'active';}?>" href="http://localhost/Saruno/graviravimas.php">Graviravimas lazeriu</a>
				</li>

			<li class="nav-item">
				<a class="nav-link <?php if($page == 'dovanos'){echo 'active';}?>"  href="http://localhost/Saruno/dovanos.php">Dovanos</a>
				</li>

			<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php if($page == 'placiaformate'){echo 'active';}?>" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kita
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://localhost/Saruno/spaudos.php">Spaudos darbai</a>
          <a class="dropdown-item" href="http://localhost/Saruno/svetaines.php">Interneto svetainės</a>
          <a class="dropdown-item" href="http://localhost/Saruno/antspaudai.php">Antspaudai</a>
		  <a class="dropdown-item" href="http://localhost/Saruno/sieneles.php">Foto sienelės</a>

        </div>
		</li>
			<li class="nav-item">
				<a class="nav-link <?php if($page == 'reklama'){echo 'active';}?>" href="http://localhost/Saruno/reklama.php">Reklamos priedai</a>
				</li>
		</ul>
	</div>
</div>
</nav>