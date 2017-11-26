@extends('layouts.master')

@section('content')

    <div id="ww">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 centered">
                    <img src="/img/user.png" alt="Photo de profile">
                    <h1>Roch D'Amour</h1>
                    <p>Étudiant en Génie Logiciel à l'ETS, je suis fier de vous présenté mon site web.
                    C'est ici que se dresse la liste de tous mes projets, qu'ils soient en développement ou terminés. N'hésitez-pas à explorer, peut-être que vous y trouverez quelque choses d'intéressant!
                    </p>	

                    <p>
                    Le site n'est peut-être pas parfait en ce moment, mais je travail fort pour qu'il soit bientôt présentable!. 
                    </p>

                    <h3></h3>			

                </div><!-- /col-lg-8 -->
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /ww -->

    </br>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 centered">
                <span class="glyphicon glyphicon-pencil"></span>	
                <h1>Projets Récents</h1>
            </div>		
        </div>
        @include("projets.listes", ['lstProjets' => $lstProjets ])
    <hr> </br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 centered">
                <span class="glyphicon glyphicon-tree-deciduous"></span>	
                <h1>Blog</h1>
            </div>		
        </div>
        @include('blogs.list', ['lstBlog' => $lstBlog])
    </div>


@endsection
