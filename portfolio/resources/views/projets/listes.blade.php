 
	@if($lstProjets->isEmpty())


	<div class="row mt centered">	
		<div class="col-md-8 col-md-offset-2">
		<h2>Il n'y a pas de projets ici pour le moment.</h2>
		</div>
	</div><!-- /row -->


	@else

		@foreach($lstProjets->chunk(3) as $ligne)
			<div class="row mt centered">	

				@foreach($ligne as $projet)

				<div class="col-md-4">
					<a class="zoom black" href="/projets/{{$projet->id}}">
						<img class="img-responsive img-responsive-centered" src="/img/projets/{{ $projet->picture }}" alt="" /></a>
					<a href="/projets/{{$projet->id}}">
						<p style="color:black;">{{$projet->name}}</p>
					</a>
				</div>

				@endforeach

			</div>	
		@endforeach
	@endif

