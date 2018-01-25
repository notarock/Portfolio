
@extends('layouts.master')

@section('content')

    <div class="container pt">

        @if(Auth::check())
            @if(Auth::user()->admin)
                <div class="col-md-8 col-md-offset-2 centered">
                    <div class="row">
                        <a href='/blogs/{{$blog->id}}/edit'
                         class="col-md-4 col-md-offset-2 btn btn-warning">
                         <span style="color:black;">Éditer</span>
                        </a>
                        <a href='/blogs/{{$blog->id}}/delete' class="col-md-4 btn btn-danger">
                            <span style="color:black;">Supprimer</span>
                        </a>
                    </div>

                    <hr/>
                </div>
            @endif
        @endif


        <div class="row mt">
            <div class="col-md-8 col-md-offset-2 centered">
                <h3>{{$blog->title}}</h3>
                <hr />
            </div>
        </div>


        <div class="row mt">
            <div class="col-md-12 centered">
                <p>
                <img class="img-responsive img-responsive-centered" src="/img/blogs/{{$blog->picture}}" alt="">
                </p>
                <p>{{$blog->body}}</p>
            </div>

        </div>


    </div>


    </div><!-- /container -->

@endsection
