

	@if($lstChapitres->count() === 0)

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

