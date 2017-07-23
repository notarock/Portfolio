
		<div class="row mt">
			<div class="col-md-8 col-md-offset-2 centered">
				<h3>{{$projet->name}}</h3>
				<hr />
			</div>
		</div>

		<div class="col-md-9">
			<div class="row mt">
				<div class="col-md-12 centered">
					<p>
					<img class="img-responsive" src="/img/projets/{{$projet->picture}}" alt="">
					</p>
					<p>{{$projet->description}}</p>
				</div>
			</div>
		</div>

	<div class="col-md-3">
		@include('chapitres.listes', ['lstChapitres' => $projet->chapitres])
	</div>

	@include('projets.resume', ['projet' => $projet])

