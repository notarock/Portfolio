
	@if($lstCategories->isEmpty())

	<div class="row mt centered">
		<div class="col-md-8 col-md-offset-2">
		<h2>Il n'y a pas de catégories ici pour le moment.</h2>	
		</div>
	</div><!-- /row -->

	@else
		@foreach($lstCategories->chunk(4) as $ligne)
			<div class="row mt centered">	

				@foreach($ligne as $categorie)

				<div class="col-md-3">
					<a class="zoom blue" href="/categories/{{$categorie->id}}">
						<img class="img-responsive" src="/img/categories/{{ $categorie->picture }}" alt="" /></a>
					<a href="/categories/{{$categorie->id}}" style="color:black;" >
						<p>{{$categorie->name}} ({{$categorie->projets->count()}}) </p>
					</a>				
				</div>

				@endforeach

			</div>	
		@endforeach
	@endif

