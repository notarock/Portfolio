

@extends('layouts.master')

@section('content')

	<!-- +++++ Projects Section +++++ -->

	<div class="container pt">

		<h1 class="centered">Nouvelle catégorie</h1>

		<hr/>	


	<form method="POST" action="/categories" enctype="multipart/form-data">
	
		{{csrf_field()}}

		@include('categories.editable')
	</form>


	</div><!-- /container -->



@endsection
