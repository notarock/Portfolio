@extends('layouts.master')

@section('content')

	<!-- +++++ Projects Section +++++ -->

	<div class="container pt">

		<h1 class="centered">Nouveau Chapitre</h1>
		<h3 class="centered">{{$projet->name}}</h3>

		<hr/>	


		<form method="POST" action="/projets/{{$projet->id}}/chapitres" enctype="multipart/form-data">
	
		{{csrf_field()}}


		@include('chapitres.editable', ['projet' => $projet, 'chapitre' => $chapitre])
	</form>


	</div><!-- /container -->



@endsection
