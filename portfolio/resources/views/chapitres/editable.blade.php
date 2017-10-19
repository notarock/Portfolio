

	<div class="form-group">
		<label for="name">Nom:</label>
		<input id="name" required type="text" value="{{$chapitre->name or old('name')}}" class="form-control" placeholder="Entrer un nom" name="name">
	</div>

	<div class="form-group">
		<label for="picture">Photo de ce chapitre</label>
		<img class="img-responsive img-responsive-centere" style="width:40%; padding:15 0;" src="/img/{{$chapitre->projet_id}}/{{$chapitre->picture}}" alt="Image du projet">
		<input id="picture" type="file" name="picture"  value="{{$projet->picture or old('picture')}}">
		<p class="help-block">Choisir une image</p>
	</div>

	<div class="form-group">
		<label for="textUp">Text en haut de la photo:</label>
		<textarea id="textUp" class="form-control" placeholder="Présentation du chapitre..." name="textUp">{{$projet->textUp or old('textUp')}}</textarea>    
	</div>

	<div class="form-group">
		<label for="textDown">Text sous la photo:</label>
		<textarea id="textDown" class="form-control" placeholder="Explication de la photo..." name="textDown">{{$projet->textDown or old('textDown')}}</textarea>    
	</div>

	<div class="form-group">
		<label for="position">Position:</label>
		<input type="number" class="form-control" value="{{$chapitre->position or old('position')}}" id="position" placeholder="0" name="position">
	</div>


	<div class="row">
	<a href="{{URL::previous()}}" class="col-md-3 btn btn-primary">Retour</a>		

		<button type="submit" class=" col-md-offset-6 col-md-3 btn btn-primary">Enregistrer</button>

	</div>
	
	@include('errors.errors')

