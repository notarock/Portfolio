
<div class="row mt">
    <div class="col-md-8 col-md-offset-2 centered">
        <h3>{{$projet->name}}</h3>
        @if(isset($projet->lien_github))
            <h5><a href="{{$projet->lien_github}}">source</a></h5>
        @endif
        <hr />
    </div>
</div>


<div class="row mt">
    <div class="col-md-12 centered">
        <p>
        <img class="img-responsive img-responsive-centered" src="/img/projets/{{$projet->picture}}" alt="">
        </p>
        <p>{{$projet->description}}</p>
    </div>

    @include('projets.resume', ['projet' => $projet])

</div>


<div class="row">
    @include('chapitres.listes', ['lstChapitres' => $projet->chapitres])
</div>



</div>

