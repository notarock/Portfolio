

	<div class="form-group">
		<label for="name">Nom:</label>
		<input id="name" required type="text" value="{{$categorie->name or old('name')}}" class="form-control" placeholder="Entrer un nom" name="name">
	</div>

	<div class="form-group">
		<label for="picture">Photo de la categorie</label>
		@if(isset($categorie->picture))	
		<img class="img-responsive img-responsive-centere" style="width:40%; padding:15 0;" src="/img/categories/{{$categorie->picture}}" alt="Image de la categorie">
	@endif
		<input id="picture" type="file" name="picture"  value="{{$categorie->picture or old('picture')}}">
		<p class="help-block">Choisir une image</p>
	</div>

	<div class="form-group">
		<label for="description">Description:</label>
		<textarea id="description" class="form-control" placeholder="Description courte de la categorie..." name="description">{{$categorie->description or old('description')}}</textarea>    
	</div>


	<div class="row">
		<a href="{{URL::previous()}}" class="col-md-3 btn btn-primary">Retour</a>		

		<button type="submit" class=" col-md-offset-6 col-md-3 btn btn-primary">Enregistrer</button>

	</div>

	@include('errors.errors')
