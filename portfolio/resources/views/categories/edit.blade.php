
@extends('layouts.master')

@section('content')

	<!-- +++++ Categories Section +++++ -->

	<div class="container pt">

		<h1 class="centered">Modifier {{$categorie->name}}</h1>

		<hr/>	


		<form method="POST" action="/categories/{{$categorie->id}}" enctype="multipart/form-data">

		{{csrf_field()}}
		{{ method_field('PATCH') }}


		@include('categories.editable', ['categorie' => $categorie])

	</form>


	</div><!-- /container -->



@endsection
