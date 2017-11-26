@if($lstBlog->isEmpty())


    <div class="row mt centered">	
        <div class="col-md-8 col-md-offset-2">
            <h2>Il n'y a pas de blog ici pour le moment.</h2>
        </div>
    </div><!-- /row -->


@else

    @foreach($lstBlog as $blog)
        <div class="row">
            <a href="/blogs/{{$blog->id}}">
                <h2>{{$blog->title}}</h2> 
            </a>
            <p> {{$blog->updated_at->diffForHumans()}} <p>
        </div>

        <div class="row">
            {{$blog->body }}
            <a href="/blogs/{{$blog->id}}">
                lire la suite
            </a>
            </p>
            </br>

        </div>
    @endforeach

@endif

