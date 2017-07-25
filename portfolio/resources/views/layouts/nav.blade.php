		<!-- Static navbar -->
		<div class="navbar navbar-inverse navbar-static-top"

@if(Auth::check())
	@if(Auth::user()->admin)
		style="background-color:black;"
	@endif
@endif

>
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

			@foreach($DDcategories as $categorie)

			<li><a href="/categories/{{$categorie->id}}">{{$categorie->name}}</a></li>

			@endforeach

			<li><a href="/categories">Catégories</a></li>

			<li><a href="/blogs">Blog</a></li>

			<li><a href="/profile">À Propos</a></li>

			@if(Auth::check())
			<li><a href="/logout">Logout</a></li>
			@endif
		</ul>
	</div><!--/.nav-collapse -->
		@if(Session::has('status'))
			<div class="centered">			
				<h3 class="alert alert-info">{{Session::get('status')}}</h3>
			</div>
		@endif
	</div>	
</div>
