	<div class="row">

		<!--  Section chapitres    -->

	
		<div class="row mt">

			<h2>{{$chapitre->name}}</h2>

		</div>


		<div class="row mt">

			<p>{{$chapitre->textUp}}</p>

		</div>

		<div class="row mt">
			<div class="col-md-10 col-md-offset-1 centered">

				<p><img class="img-responsive" src="/img/chapitres/{{$chapitre->projet_id}}/{{$chapitre->picture}}" alt="" /></p>

			</div>
		</div>

		<div class="row mt">

			<p>{{$chapitre->textDown}}</p>

		</div>


		<div class="row mt">

		@include('projets.resume', ['projet' => $chapitre->projet])		

		</div>

	</div>
