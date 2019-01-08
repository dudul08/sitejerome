@extends('template/template')
@section('content')




<div class="card-deck">
	<div class="card m-3 shadow-sm">
		<div class="card-body ">
			<h5 class="text-primary">Quel type de remplacement ? </h5>
			<p> 
				Je suis disponible pour des remplacements à la journée ( 1 ou plusieurs jours ), à la semaine, toute durée. Je suis souple en terme d'organisation. Je m'adapte à toutes les situations. J'étudie toutes les propositions de remplacement. Je suis très réactif pour répondre à vos demandes et questions. 
			</p>
			
		</div>
	</div>
	
	
	<div class="card m-3 shadow-sm">
		<div class="card-body">
			<h5 class="text-primary">Vous souhaitez consulter mes disponibilités ? </h5>
			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Du</label>
				<div class="col-sm-10">
					<input type="text" class="form-control datepicker w-50" value="01/02/2019">
				</div>
			</div>
			<div class="form-group row">
				<label  class="col-sm-2 col-form-label">Au</label>
				<div class="col-sm-10">
					<input type="text" class="form-control datepicker w-50" value="01/02/2019">
				</div>
			</div>	
			<div class="form-group row">
				<div class="col-sm-12 ">
					<button type="button" class="btn btn-primary">Lancer la recherche</button>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		@endsection