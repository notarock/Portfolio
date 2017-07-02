
@extends('layouts.master')

@section('content')

<div id="ww">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 centered">
				<img src="/img/user.png" alt="Photo de profile">
				<h1>Bienvenue sur mon site!</h1>
				<p>Je suis Roch D'Amour, programmeur dans la région de Montréal. J'étudie présentement en Génie Logiciel à l'ETS et appart de ça, je ne sais pas quoi dire de plus à propos de moi.</p>
				<p>J'ai créer ce site afin de pouvoir documenter les projets que je réalise dans mes temps libres ainsis qu'à l'université. Ne vous gênez pas d'explorer! :)</p>
			</div><!-- /col-lg-8 -->
		</div><!-- /row -->
	</div> <!-- /container -->
</div><!-- /ww -->

<div class="container pt">
	<div class="row mt">
		<div class="col-lg-6 col-lg-offset-3 centered">
			<h3>MES PROJETS</h3>
			<hr>	
			<p>
			Parmis la liste, vous retrouverez les projets sur lesquels j'ai travaillé.
			</p>
			<p>
			Vous pouvez aussi explorer les différentes catégories à partir du menu de droite.
			</p>
		</div>	
	</div>
</div>



@include("projets.listes", ['lstProjets' => $lstProjets ])

@endsection
