
@extends('layouts.master')

@section('content')


<div id="ww">
	<div class="container">
		<div class="row">
	
			@if(Auth::user()->admin)
			
			<div class="col-md-8 col-md-offset-2 centered">
				
				<div class="row">
					<a href='/projets/create' class="col-md-4 col-md-offset-4 btn btn-success">
						<span style="color:black;">Créer un projet</span>
					</a>
				</div>
			
			<hr/>
			</div>
		
			@endif

			<div class="col-md-8 col-md-offset-2 centered">
				<span class="glyphicon glyphicon-pencil"></span>
				<h1>MES PROJETS</h1>
			</div>		

			<div class="row col-md-8 col-md-offset-2 centered">{{ $lstProjets->links() }}</div>

			@include("projets.listes", ['lstProjets' => $lstProjets ])

			<div class="row col-md-8 col-md-offset-2 centered">{{ $lstProjets->links() }}</div>
		</div>
	</div> <!-- /container -->
</div><!-- /ww -->

@endsection
