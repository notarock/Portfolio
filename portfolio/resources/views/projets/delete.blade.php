
@extends('layouts.master')

@section('content')

	<!-- +++++ Projects Section +++++ -->

	<div class="container pt">
	
			<div class="col-md-8 col-md-offset-2 centered">
				<div class="row">	
				
					<form method="POST" action="/projets/{{$projet->id}}/destroy">
						{{csrf_field()}}
					<h1>Es tu certain de vouloir supprimer ce projet?</h1>	
					<a href='/projets/{{$projet->id}}' class="col-md-4 col-md-offset-2 btn btn-danger">
						non	
					</a>
	
					<button type="submit" class="btn btn-danger col-md-4">Supprimer</button>                    
				
					</form>
				</div>
			
			</div>

	@include('projets.details', ['projet' => $projet])

	</div><!-- /container -->

@endsection
