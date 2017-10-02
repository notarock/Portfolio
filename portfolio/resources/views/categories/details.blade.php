
		<div class="row mt">
			<div class="col-md-6 col-md-offset-3 centered">
				<h3>{{$categorie->name}}</h3>
				<hr>

				<div class="row">
					<img class="img-responsive img-responsive-centered" src="/img/categories/{{$categorie->picture}}" alt="">
				</div>
				</br>
				<p>{{$categorie->description}}</p>
				</br>

				<p><bt>Nombre de projets: {{$categorie->projets->count()}}</bt></p>
			</div>
		</div>
