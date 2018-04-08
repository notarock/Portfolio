@extends('layouts.master')

@section('content')

    <!-- +++++ Projects Section +++++ -->

    @if(Auth::check())
        @if(Auth::user()->admin)
            <div class="row">
                <a href='/projets/{{$projet->id}}/edit'
                   class="col-md-4 col-md-offset-2 btn btn-warning">
                    <span style="color:black;">Éditer</span>
                </a>
                <a href='/projets/{{$projet->id}}/delete' class="col-md-4 btn btn-danger">
                    <span style="color:black;">Supprimer</span>
                </a>
            </div>

            <hr/>
        @endif
    @endif

    @include('projets.details', ['projet' => $projet])

@endsection
