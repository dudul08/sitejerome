<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ base_url() }}dist/css/app.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Pharmacien remplaçant | Jérôme SUPPIN</title>
	
</head>

<body>
	<header>
		
		<div class="entete bg-entete">
			
			<div class="entete-image">
				<img src="{{ base_url('dist/images/js.png') }}" height="125 px" width="125 px"  srcset="">
				<span class="entete-nom ">
					<h3>Jérôme SUPPIN </h3>
					<h5>Docteur en Pharmacie</h5> 
				</span>
			</div>
			
		</div>
	</header>
	
	<nav class="navbar navbar-expand-sm navbar-dark bg-primary" >
		<div class=container>
			<a class="navbar-brand" href="#">
				<img src="{{ base_url('dist/images/caducee.png') }}" width="30" height="30" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{ base_url('parcours') }}">Mon parcours professionnel <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="{{ base_url('disponibilites') }}">Mes disponibiltés <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="{{ base_url('contacter') }}">Me contacter <span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<main role="main" >
	<div class=container style="margin-top:20px;">
		@yield('content')
		
	</div>
	
</main>	

<footer  class="container">
	<p> <h6> © Jérôme SUPPIN 2019</h6></p>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js" integrity="sha256-ncetQ5WcFxZU3YIwggfwOwmewLVX4SHLBtDYnrsxooY=" crossorigin="anonymous"></script>
</body>
<script>
	(function($){
		$.fn.datepicker.dates['fr'] = {
			days: ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"],
			daysShort: ["dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam."],
			daysMin: ["d", "l", "ma", "me", "j", "v", "s"],
			months: ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"],
			monthsShort: ["janv.", "févr.", "mars", "avril", "mai", "juin", "juil.", "août", "sept.", "oct.", "nov.", "déc."],
			today: "Aujourd'hui",
			monthsTitle: "Mois",
			clear: "Effacer",
			weekStart: 1,
			format: "dd/mm/yyyy"
		};
	}(jQuery));
	
	$('.datepicker').datepicker({
		language: 'fr',
		autoclose: true,
		todayHighlight: true
	})
</script>
</html>