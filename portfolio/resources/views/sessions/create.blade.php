
@extends ('layouts.master')

@section('content')


<div class="container pt"> 
	<div class="row mt">
		<div class="col-md-6 col-md-offset-3 centered">
		<h1>Connection</h1>

		</div>     
	</div>

	<div class="row mt">            
		<div class="col-md-6 col-md-offset-3">
			<form method="POST" action="/login">
				{{csrf_field()}}
				<div class="form-group">
					<label for="email">Courriel:</label>  
					<input required="required" type="email" class="form-control" id="email" name="email">
				</div>

				<div class="form-group">                
					<label for="password">Mot de passe:</label> 
					<input required="required" type="password" class="form-control" id="password" name="password">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Login</button> 
				</div>                    

				@include('errors.errors')
			</form>
		</div>     
	</div><!-- /row -->
</div><!-- /container -->  

</br>
</br>
</br>
</br>
</br>
</br>
</br>

@endsection
