@extends('layouts.master')

@section('content')

	<div class="container pt">

			<h3>Modifier {{$categorie->name}}</h3>
			
			<hr/> 
			
			<form methode="POST" action="/categories/{{$categorie->id}}" enctype="multipart/form-data">
				{{csrf_field()}}
				{{method_field('PATCH')}}

				@include('categories.editable', ['categorie' => $categorie])


			</form>
		</div>
			
	@endsection
