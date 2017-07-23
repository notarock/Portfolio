
@extends('layouts.master')

@section('content')


	<!-- +++++ Section chapitre +++++ -->

	<div class="container pt">

		<div class="row mt">
			<div class="col-md-8 col-md-offset-2 centered">
				<h3>{{$chapitre->projet->name}}</h3>
				<hr />
			</div>
		</div>

	<div class="col-md-9">

		<!--  Section chapitres selection   -->

		<div class="row mt">

			<p>{{$chapitre->textUp}}</p>

		</div>

		<div class="row mt">
			<div class="col-md-10 col-md-offset-1 centered">

				<p><img class="img-responsive" src="/img/chapitres/{{$chapitre->picture}}" alt="" /></p>

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

