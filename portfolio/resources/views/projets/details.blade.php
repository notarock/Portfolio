


@if(isset($projet->lien_github))
    <a id="projet_title" href="{{$projet->lien_github}}">
        <h1>>_ {{$projet->name}}</h1>
    </a>
@else
    <h1>>_ {{$projet->name}}</h1>
@endif

<div class="row ">
    <div class="col-md-12 centered">
        <p>
            <img class="img-responsive img-responsive-centered" src="/img/projets/{{$projet->picture}}" alt="">
            @include('projets.resume', ['projet' => $projet])
        </p>
        <p>{{$projet->description}}</p>
    </div>


</div>


<div class="row">
    @include('chapitres.listes', ['lstChapitres' => $projet->chapitres])
</div>




