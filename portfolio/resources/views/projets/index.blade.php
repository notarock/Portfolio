
@extends('layouts.master')

@section('content')


<div id="ww">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 centered">
				<img src="/img/work.png" alt="Outils">
				<h1>MES PROJETS</h1>
			</div>		
			<div class="row col-lg-8 col-lg-offset-2 centered">{{ $lstProjets->links() }}</div>

			@include("projets.listes", ['lstProjets' => $lstProjets ])
	
			<div class="row col-lg-8 col-lg-offset-2 centered">{{ $lstProjets->links() }}</div>
	


	</div> <!-- /container -->
</div><!-- /ww -->

@endsection
