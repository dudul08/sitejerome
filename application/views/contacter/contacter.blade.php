@extends('template/template')
@section('content')


	<div class="card m-3 shadow-sm w-50">
		<div class="card-body ">
			<h5 class="text-primary">Mes coordonnées : </h5>
			<p>
				Pour tous renseignements , vous pouvez me contacter : 
			</p>
			<ul>
				<li><img style="width: 16px;height: 16px; margin-right: 10px;" src="{{ base_url('dist/svg/envelope-closed.svg') }}" alt=""> Mail : <a href="jerome.suppin@pharmacien-remplacement.fr">jerome.suppin@pharmacien-remplacement.fr</a></li>
				<li><img style="width: 16px;height: 16px; margin-right: 10px;" src="{{ base_url('dist/svg/phone.svg') }}" alt=""> Téléphone : <span class="phone">06 52 57 98 92</span></li>
			</ul>
		</div>
	</div>







@endsection