
@extends('layouts.master')

@section('content')


	<!-- +++++ Section chapitre +++++ -->

	<div class="container pt">

		<div class="row mt">
			<div class="col-md-8 col-md-offset-2 centered">
				<h3>{{$projet->name}}</h3>
				<hr />
			</div>
		</div>

		@if(Auth::check())
		@if(Auth::user()->admin)
			<div class="col-md-8 col-md-offset-2 centered">
				<div class="row">
					<a href='/projets/{{$projet->id}}/chapitres/{{$chapitre->id}}/edit'
					class="col-md-4 col-md-offset-2 btn btn-warning">
						<span style="color:black;">Éditer</span>
					</a>
					<a href='/projets/{{$projet->id}}/chapitre/{{$chapitre->id}}/delete' class="col-md-4 btn btn-danger">
						<span style="color:black;">Supprimer</span>
					</a>
				</div>

			<hr/>
			</div>
		@endif
		@endif

	<div class="col-md-9">

		<!--  Section chapitres selection   -->

		<div class="row mt">

			<p>{{$chapitre->textUp}}</p>

		</div>

		<div class="row mt">
			<div class="col-md-10 col-md-offset-1 centered">

				<p><img class="img-responsive" src="/img/chapitres/{{$chapitre->projet_id}}/{{$chapitre->picture}}" alt="" /></p>

			</div>
		</div>

		<div class="row mt">

			<p>{{$chapitre->textDown}}</p>

		</div>




	</div>

	<div class="col-lg-3">	

		@include('chapitres.listes', ['lstChapitres' => $chapitre->projet->chapitres])		
	</div>

	@include('projets.resume', ['projet'=> $chapitre->projet])		
	</div><!-- /container -->	

@endsection

