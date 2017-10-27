

@extends('layouts.master')

@section('content')

	<!-- +++++ Chapitre Section +++++ -->

	<div class="container pt">
	
			<div class="col-md-8 col-md-offset-2 centered">
				<div class="row">	
				
					<form method="POST" action="/projets/{{$chapitre->projet_id}}/chapitres/{{$chapitre->id}}/destroy">
						{{csrf_field()}}
					<h1>Es tu certain de vouloir supprimer ce chapitre?</h1>	
					<a href='/projets/{{$chapitre->projet_id}}/chapitres/{{$chapitre->id}}' class="col-md-4 col-md-offset-2 btn btn-danger">
						non	
					</a>
	
					<button type="submit" class="btn btn-danger col-md-4">Supprimer</button>                    
				
					</form>
				</div>
			
			
	<div class="row">
		@include('chapitres.details', ['chapitre' => $chapitre])
	</div>

	</div><!-- /container -->
</div>
@endsection
