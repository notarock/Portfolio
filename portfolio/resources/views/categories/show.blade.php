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

		<div class="row mt">
			<div class="col-md-6 col-md-offset-3 centered">
				<h3>{{$categorie->name}}</h3>
				<hr>

				<div class="row">
					<img class="img-responsive img-responsive-centered" src="/img/categories/{{$categorie->picture}}" alt="">
				</div>
				</br>
				<p>{{$categorie->description}}</p>
				</br>

				<p><bt>Nombre de projets: {{$categorie->projets->count()}}</bt></p>
			</div>
		</div>

	<div class="row col-md-8 col-md-offset-2 centered">{{ $lstProjets->links() }}</div>

		@include("projets.listes", ['lstProjets' => $lstProjets ])

	<div class="row col-md-8 col-md-offset-2 centered">{{ $lstProjets->links() }}</div>

	</div><!-- /container -->




@endsection
