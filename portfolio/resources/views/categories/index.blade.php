
@extends('layouts.master')

@section('content')


<div id="ww">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 centered">
				<span class="glyphicon glyphicon-tag"></span>
				<h1>CATÉGORIES</h1>
			</div>		
			<div class="row col-md-8 col-md-offset-2 centered">{{ $lstCategories->links() }}</div>

			@include("categories.listes", ['lstCategories' => $lstCategories ])

			<div class="row col-md-8 col-md-offset-2 centered">{{ $lstCategories->links() }}</div>



	</div> <!-- /container -->
</div><!-- /ww -->

@endsection
