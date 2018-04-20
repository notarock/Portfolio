
@extends('layouts.master')

@section('content')

    <!-- +++++ Welcome Section +++++ -->
    <div id="ww">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 centered">
                    <img src="/img/user.png" alt="Stanley">
                    <h1>{{$profile->name}}</h1>
                    <h4>À propos de moi</h4>					

                    <p>Je suis Roch D'Amour, programmeur dans la région de {{$profile->region}}
                        et présentement étudiant en Génie Logiciel, à l'ETS.
                    </p>

                    <p>
                        On dit de moi que je suis un "patenteux": J'aime travailler sur un projet personnel et réaliser des choses par moi même. C'est pour cette raison que
                        j'ai beaucoups d'interet pour le monde du open source: Il est possible de lire le code source d'un programme déjà contruit pour en apprendre son fonctionnement.	
                        
                        {{$profile->description}}
                    </p>
                    
                </div><!-- /col-lg-8 -->
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /ww -->
    
    
    <!-- +++++ Information Section +++++ -->
    
    <div class="container pt">
        
        <div class="row mt">
            
            <!--
                 <div class="col-lg-6">
                 <h4>LA VISION</h4>
                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                 </div>
            -->	

            <!--	
                 <div class="col-lg-6">
                 <h4>LES SKILLS</h4>
                 Wordpress
                 <div class="progress">
                 <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                 <span class="sr-only">60% Complete</span>
                 </div>
                 </div>

                 Photoshop
                 <div class="progress">
                 <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                 <span class="sr-only">80% Complete</span>
                 </div>
                 </div>
                 
                 HTML + CSS
                 <div class="progress">
                 <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                 <span class="sr-only">95% Complete</span>
                 </div>
                 </div>

                 </div>
            -->
        </div><!--/row -->
    </div><!-- /container -->

@endsection


