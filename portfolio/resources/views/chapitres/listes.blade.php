

	@if($lstChapitres->count() === 0)
	<div class="row mt centered">	
		<h2>Rien à affiché.</h2>
	</div>
	@else

	<div class="panel panel-primary">

		<a href="/projets/{{$lstChapitres->first()->projet->id}}">
			<div class="panel-heading">Chapitres</div>
		</a>

		@foreach($lstChapitres as $chapitre)

			<a href="/projets/{{$chapitre->projet->id}}/chapitres/{{$chapitre->id}}">
				<div class="panel-body">{{$chapitre->name}}</div>
			</a>

		@endforeach

	</div>	

	@endif

