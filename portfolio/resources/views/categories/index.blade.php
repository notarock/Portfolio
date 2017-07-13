
@extends('layouts.master')

@section('content')


<div id="ww">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 centered">
				<img src="/img/tag.png" alt="Outils">
				<h1>CATÉGORIES</h1>
			</div>		
			<div class="row col-lg-8 col-lg-offset-2 centered">{{ $lstCategories->links() }}</div>

			@include("categories.listes", ['lstCategories' => $lstCategories ])
	
			<div class="row col-lg-8 col-lg-offset-2 centered">{{ $lstCategories->links() }}</div>
	


	</div> <!-- /container -->
</div><!-- /ww -->

@endsection
