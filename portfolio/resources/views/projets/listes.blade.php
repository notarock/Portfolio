 
	@if($lstProjets->isEmpty())

	<div class="row mt centered">	
		<h2>Il n'y a pas de projets à montrés.</h2>
	</div><!-- /row -->

	@else
		@foreach($lstProjets->chunk(3) as $ligne)
			<div class="row mt centered">	

				@foreach($ligne as $projet)

				<div class="col-lg-4">
					<a class="zoom blue" href="/projets/{{$projet->id}}"><img class="img-responsive" src="/img/projets/{{ $projet->picture }}" alt="" /></a>
					<p>{{$projet->name}}</p>
				</div>

				@endforeach

			</div>	
		@endforeach
	@endif

