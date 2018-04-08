<!-- Static navbar -->


<div class="term_block"
@if(Auth::check())
    @if(Auth::user()->admin)
        style="background:#cc241d;"
    @endif
@endif
>
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><h3> >_rochdamour.ca </h3></a>
    </div>
    <br>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/projets">Projets</a></li>

            <li><a href="/categories">Catégories</a></li>

            <li><a href="/blogs">Blog</a></li>

            <li><a href="/profile">À Propos</a></li>

            @if(Auth::check())
                <li><a href="/logout">Logout</a></li>
            @endif
        </ul>
    </div><!--/.nav-collapse -->
    @if(Session::has('status'))
        <br>
        <div class="centered">
            <h3 class="alert alert-info">{{Session::get('status')}}</h3>
        </div>
    @endif
</div>
