@extends('layouts.master')

@section('content')

	<!-- +++++ Projects Section +++++ -->
	
	<div class="container pt">


		<div class="row mt">
			<div class="col-lg-8 col-lg-offset-2 centered">
				<h3>{{$projet->name}}</h3>
				<hr />
			</div>
		</div>

	<div class="col-lg-9">

		<div class="row mt">
			<div class="col-lg:-12 centered">
	
				<p><img class="img-responsive" src="/img/projets/{{$projet->picture}}" alt=""></p>

				<p>{{$projet->description}}</p>
			</div>
		</div>

	</div>
	<div class="col-lg-3">
		@include('chapitres.listes', ['lstChapitres' => $projet->chapitres])
	</div>

		@include('projets.resume', ['projet' => $projet])

	</div><!-- /container -->

@endsection
