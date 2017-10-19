

@extends('layouts.master')

@section('content')

	<!-- +++++ Chapitre Section +++++ -->

	<div class="container pt">

		<h1 class="centered">Modifier {{$chapitre->name}}</h1>

		<hr/>	


		<form method="POST" action="/projets/{{$chapitre->projet_id}}/chapitres/{{$chapitre->id}}" enctype="multipart/form-data">
	
		{{csrf_field()}}
		{{ method_field('PATCH') }}


		@include('projets.editable', ['projet' => $projet,
						'selectedEtat' => $selectedEtat,
						'selectedCategorie' => $selectedCategorie])

	</form>


	</div><!-- /container -->



@endsection
