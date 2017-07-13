@extends('layouts.master')

@section('content')

<div id="ww">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 centered">
				<img src="/img/user.png" alt="Photo de profile">
				<h1>Bienvenue sur mon site!</h1>
			<p>Je suis Roch D'Amour, programmeur dans la région de Montréal et présentement étudiant en Génie Logiciel, à l'ETS.</p>
			<p>Dans mes temps libres, j'aime bien "gosser" sur mon ordinateur. 
				Que ce soit sur un projet personnel, modification de mon bureau (Linux "Rice")
				 ou simplement pour lire d'un sujet qui attire mon attention, j'ai toujours quelque chose en cours. 
				Sur un coup de tête, j'ai décider de créer ce site web pour receuillir touts les trucs sur lesquels
				 j'ais "gosser" dans mes temps libres.
			 	Peut-être qu'un jours, une personne tombera sur ce site et en apprendra quelque choses. Qui sait :)</p>
			<p>Pour le moment, je me concentre sur la mise en ligne de ce site web. Mais à l'avenir, peut-être que je ferai
			une chaine Youtube pour pouvoir expliquer en détails certaines choses vues ici.</p>
			<h3>Et sur ce, je vous dis: Bonne Découverte!</h3>			

	</div><!-- /col-lg-8 -->
		</div><!-- /row -->
	</div> <!-- /container -->
</div><!-- /ww -->

<div class="container">


		<div class="col-lg-8 col-lg-offset-2 centered">
			<img src="/img/work.png" alt="Outils">
			<h1>Projets Récents</h1>
		</div>		

	@include("projets.listes", ['lstProjets' => $lstProjets ])
</div>

@endsection
