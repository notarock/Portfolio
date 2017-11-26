@extends('layouts.master')

@section('content')

    <div class="container pt">

        @if(Auth::check())
            @if(Auth::user()->admin)



            @endif
        @endif


        <div class="row col-md-8 col-md-offset-2 centered">{{ $lstBlog->links() }}</div>


        @include('blogs.list', ['lstBlog' => $lstBlog])


        <div class="row col-md-8 col-md-offset-2 centered">{{ $lstBlog->links() }}</div>

    </div><!-- /container -->

@endsection
