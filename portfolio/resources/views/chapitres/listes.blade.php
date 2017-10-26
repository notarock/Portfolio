

@if($lstChapitres->count() === 0)

@else

	<div class="panel panel-primary">

		<a href="/projets/{{$lstChapitres->first()->projet->id}}">
			<div class="panel-heading">{{$lstChapitres->first()->projet->name}}</div>
		</a>

		@foreach($lstChapitres as $chapitre)

			<a href="/projets/{{$chapitre->projet->id}}/chapitres/{{$chapitre->id}}">
				<div class="panel-body">{{$chapitre->name}}</div>
			</a>

		@endforeach

		@if(Auth::check())
			@if(Auth::user()->admin)


				<a href='/projets/{{$lstChapitres->first()->projet->id}}}/chapitres/create' class="panel-body col-md-4 btn-success">
					<span style="color:black;">Ajouter un chapitre</span>
				</a>	
			@endif
		@endif

	</div>	


@endif

