
@extends('layouts.master')

@section('content')


	<!-- +++++ Section chapitre +++++ -->
	
	<div class="container pt">
		<div class="row mt">

			<h1> {{$chapitre->projet->name}}</h1>

<!--  Section chapitres selection   -->

			<h3>{{$chapitre->name}}</h3>

			<p>{{ $chapitre->textUp }}</p>

			<<img src="" alt="" />

			<p> {{$chapitre->textDown}}</p>
			
		</div>
	</div><!-- /container -->
	



@endsection
