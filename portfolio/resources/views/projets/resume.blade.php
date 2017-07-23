	
	<div class="col-md-8 col-md-offset-2 centered"

		<p>
			<bt>Créer par: <a href="/profile">Roch D'Amour</a>
			</bt> - <bt>
			Catégorie: <a href="/categories/{{$projet->categorie->id}}">{{$projet->categorie->name}}</a>
			</bt> - <bt>
			Date : {{$projet->updated_at->diffForHumans()}}</bt>
		</p>
	</div>
