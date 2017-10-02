@extends('layouts.master')

@section('content')


	<!-- +++++ Projects Section +++++ -->

	<div class="container pt">

		@if(Auth::check())
		@if(Auth::user()->admin)
			<div class="col-md-8 col-md-offset-2 centered">
				<div class="row">
					<a href='/categories/{{$categorie->id}}/edit'
					class="col-md-4 col-md-offset-2 btn btn-warning">
						<span style="color:black;">Éditer</span>
					</a>
					<a href='/categories/{{$categorie->id}}/delete' class="col-md-4 btn btn-danger">
						<span style="color:black;">Supprimer</span>
					</a>
				</div>

			<hr/>
			</div>
		@endif
		@endif

		@include('categories.details', ['categorie' => $categorie])

	<div class="row col-md-8 col-md-offset-2 centered">{{ $lstProjets->links() }}</div>

		@include("projets.listes", ['lstProjets' => $lstProjets ])

	<div class="row col-md-8 col-md-offset-2 centered">{{ $lstProjets->links() }}</div>

	</div><!-- /container -->




@endsection
