@extends('layouts.master')

@section('content')


	<!-- +++++ Projects Section +++++ -->

	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>{{$categorie->name}}</h3>
				<hr>

				<div class="row">
					<img class="img-responsive col-lg-4 col-lg-offset-4" src="/img/categories/{{$categorie->picture}}" alt="">
				</div>
				</br>
				<p>{{$categorie->description}}</p>
				</br>

				<p><bt>Nombre de projets: {{$categorie->projets->count()}}</bt></p>
			</div>
		</div>

	<div class="row col-lg-8 col-lg-offset-2 centered">{{ $lstProjets->links() }}</div>

		@include("projets.listes", ['lstProjets' => $lstProjets ])

	<div class="row col-lg-8 col-lg-offset-2 centered">{{ $lstProjets->links() }}</div>

	</div><!-- /container -->




@endsection
