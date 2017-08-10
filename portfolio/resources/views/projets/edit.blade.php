

@extends('layouts.master')

@section('content')

	<!-- +++++ Projects Section +++++ -->

	<div class="container pt">

		<h1 class="centered">Modifier {{$projet->name}}</h1>

		<hr/>	


		<form method="PATCH" action="/projets/{{$projet->id}}" enctype="multipart/form-data">
	
		{{csrf_field()}}

		@include('projets.editable', ['projet' => $projet])

	</form>


	</div><!-- /container -->



@endsection
