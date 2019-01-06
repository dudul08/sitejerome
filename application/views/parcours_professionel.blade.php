<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ base_url() }}dist/css/app.css">
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
</nav>
<main role="main" >
	<div class=container style="margin-top:20px;">
		
		<div class="row">
			<div class="col-md-4">
				<h3>Mes compétences</h3>
				<p>Je suis diplômé de la faculté  de pharmacie de Lille depuis 1992.
					Je travaille avec les principaux logiciels utilisés dans les officines (Smart Rx, LGPI, Winpharma ).</p>
					
				</div>
				<div class="col-md-4">
					<h3>Mes expériences</h3>
					<p> J'exerce le métier de pharmacien dans de nombreuses officines de la région en tant que pharmacien adjoint ou remplaçant.
						J'ai été titulaire d' une pharmacie de centre-ville sur la Côte d'Opale.</p>
						
					</div>
					<div class="col-md-4">
						<h3>Mon métier</h3>
						<p>J'exerce ce métier avec rigueur et discipline.
							L'intérêt du patient est ma principale préoccupation.
							Je suis particulièrement attentif à mettre mes qualités d'écoute et de conseil au service du malade.</p>
							
						</div>
					</div><!-- Example row of columns -->
					
					
					<hr>
				</div>


			</main>
			<footer style="position: relative; bottom: 0;cleft: 0;"  class="container">
				<p> <h6> © Jérôme SUPPIN 2019</h6></p>
			</footer>
			
			
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		</body>
		
		</html>