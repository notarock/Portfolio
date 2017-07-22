@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row centered">	
			<h1>Woups! On dirait qu'Il n'y à rien ici...</h1>
		</div>
		<div class="row">
			<img class="img-responsive img-responsive-centered col-mg-4 col-mg-offset-4 " src="/img/resources/sad_face.png" alt="emoji triste">
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<h3>Malheureusement, vous etes tomber sur une
					<span style="color:#dc322f;" >
						"Error 404: File not found".
					</span>
				</h3> 			
				<p>Bon, c'est pas si grave. Vous pouvez toujours retourner
					sur le site en suivant ce lien:	
				<a href='/'>Retour à la page d'accueil</a>
				</p>
			</div>
		</div>
	</div>
@endsection
