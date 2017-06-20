

	@if($lstProjets->isEmpty())

	<div class="row mt centered">	
		<h2>Il n'y a pas de projets à montrés.</h2>
	</div><!-- /row -->

	@else

	<div class="container pt">
		<div class="row mt centered">	

			@foreach($lstProjets as $projet)

			<div class="col-lg-4">
				<a class="zoom green" href="work01.html"><img class="img-responsive" src="/img/projets/{{ $projet->picture }}" alt="" /></a>
				<p>{{$projet->name}}</p>
			</div>

			@endforeach

		</div><!-- /row -->
	</div><!-- /container -->
	
	@endif

	