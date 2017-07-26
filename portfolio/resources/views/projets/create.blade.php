
@extends('layouts.master')

@section('content')

	<!-- +++++ Projects Section +++++ -->

	<div class="container pt">

		<h1 class="centered">Nouveau projet</h1>

		<hr/>	


	<form method="POST" action="/projets">
				
		@include('projets.editable')

	</form>


	</div><!-- /container -->



@endsection
