

@extends('layouts.master')

@section('content')

	<!-- +++++ Projects Section +++++ -->

	<div class="container pt">

		<h1 class="centered">Modifier {{$projet->name}}</h1>

		<hr/>	


		<form method="POST" action="/projets/{{$projet->id}}" enctype="multipart/form-data">
	
		{{csrf_field()}}
		{{ method_field('PATCH') }}


		@include('projets.editable', ['projet' => $projet,
						'selectedEtat' => $selectedEtat,
						'selectedCategorie' => $selectedCategorie])

	</form>


	</div><!-- /container -->



@endsection
