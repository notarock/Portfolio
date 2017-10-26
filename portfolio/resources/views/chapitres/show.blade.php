
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
					<a href='/projets/{{$projet->id}}/chapitres/{{$chapitre->id}}/delete' class="col-md-4 btn btn-danger">
						<span style="color:black;">Supprimer</span>
					</a>
				</div>

			<hr/>
			</div>
		@endif
		@endif


	@include('chapitres.details', ['chapitre' => $chapitre])


	<div class="row">
		@include('chapitres.listes', ['lstChapitres' => $chapitre->projet->chapitresOrdered])
	</div>


	</div><!-- /container -->	


@endsection

