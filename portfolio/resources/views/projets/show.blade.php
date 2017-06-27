@extends('layouts.master')

@section('content')


	<!-- +++++ Projects Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>{{$projet->name}}</h3>
				<hr>
				<p>{{$projet->description}}</p>
			</div>
		</div>
		<div class="row mt centered">	
			<div class="col-lg-8 col-lg-offset-2">
				<p><img class="img-responsive" src="/img/projets/{{$projet->picture}}" alt=""></p>
				<p><bt>Créer par: <a href="#">Roch D'Amour</a></bt> - <bt>Catégorie: <a href="/categories/{{$projet->categorie->id}}">{{$projet->categorie->name}}</a></bt> - <bt>Date : {{$projet->updated_at->diffForHumans()}}</bt></p>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	



@endsection
