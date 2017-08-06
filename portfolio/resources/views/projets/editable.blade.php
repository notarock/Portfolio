
	<div class="form-group">
		<label for="name">Nom:</label>
		<input id="name" required type="text" value="{{old('name')}}" class="form-control" placeholder="Entrer un nom" name="name">
	</div>

	<div class="form-group">
		<label for="picture">Photo du projet</label>
		<input id="picture" type="file" name="picture"  value="{{old('picture')}}">
		<p class="help-block">Choisir une imag</p>
	</div>

	<div class="form-group">
		<label for="description">Description:</label>
		<textarea id="description" class="form-control" placeholder="Description courte du projet..." name="description">{{old('description')}}</textarea>    
	</div>

	<div class="form-group">
		<label for="lien_github">Lien github:</label>
		<input type="text" class="form-control" value="{{old('lien_github')}}" id="lien_github" placeholder="github.com/..." name="lien_github">
	</div>


	<div class="form-group">
		<label for="categorie_id">Catégorie:</label>

		<select id="categorie_id" required class="form-control" name="categorie_id">

			<option value="">- Choisir une catégorie... -</option>

			@foreach($CBcategories as $categorie)
				<option value="{{$categorie->id}}" 
					@if(old('categorie_id') == $categorie->id)
						selected
					@endif
				>{{$categorie->name}}</option>
			@endforeach
		</select>

	</div>


	<div class="form-group">
		<label for="etat_id">État:</label>
		<select id="etat_id" class="form-control" name="etat_id" >

			<option value="">- Dans quel etat est ce projet? -</option>

			@foreach($CBetats as $etat)
				<option value="{{$etat->id}}"	
					@if(old('etat_id') == $etat->id)
						selected
					@endif
				>{{$etat->name}}</option>
			@endforeach
		</select>
	</div>

	<div class="row">
	<a href="{{URL::previous()}}" class="col-md-3 btn btn-primary">Retour</a>		

		<button type="submit" class=" col-md-offset-6 col-md-3 btn btn-primary">Enregistrer</button>

	</div>
	
	@include('errors.errors')

