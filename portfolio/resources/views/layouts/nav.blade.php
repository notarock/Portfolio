		<!-- Static navbar -->
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/">ROCH D'AMOUR</a>
	</div>
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="/projets">Projets</a></li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Catégories<b class=""></b></a>
				<ul class="dropdown-menu">
					@foreach($DDcategories as $categorie)
				
	 				<li><a href="/categories/{{$categorie->id}}">{{$categorie->name}} ({{$categorie->total()}})</a></li>

					@endforeach

					<li><a href="/categories/index">Plus...</a></li>
				</ul>
			</li>
			
			<li><a href="/profile">Profile</a></li>
		</ul>
	</div><!--/.nav-collapse -->
			</div>
		</div>
