
    <div class="form-group">
      <label for="name">Nom:</label>
      <input type="text" class="form-control" id="name" placeholder="Entrer un nom" name="name">
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea name="description" class="form-control" id="description" placeholder="Description courte du projet..." name="description"></textarea>    
    </div>

    <div class="form-group">
      <label for="lien_github">Lien github:</label>
      <input type="text" class="form-control" id="lien_github" placeholder="github.com/..." name="lien_github">
    </div>


	<div class="row">
	<a href="{{URL::previous()}}" class="col-md-3 btn btn-primary">Retour</a>		

		<button type="submit" class=" col-md-offset-6 col-md-3 btn btn-primary">Enregistrer</button>
	
	</div>

	@include('errors.errors')

