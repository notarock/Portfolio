@extends ('layouts.master')

@section('content')

<div class="container pt">
        <div class="row mt">
                <div class="col-md-6 col-md-offset-5 centered">
                        <h1>Inscription</h1>
                </div>
        </div>
        <div class="row mt">
                <div class="col-md-8 col-md-offset-2">
                        <form method="POST" action="/register">
                                {{csrf_field()}}

                                <div class="form-group">
                                        <label for="name">Prénom Nom:</label>
                                        <input required="required" type="text" class="form-control" id="name" name="name">
                                </div>

                                <div class="form-group">
                                        <label for="email">Courriel:</label>
                                        <input required="required" type="email" class="form-control" id="email" name="email">
                                </div>


                                <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input required="required" type="password" class="form-control" id="password" name="password">
                                </div>

                                <div class="form-group">
                                        <label for="password_confirmation">Confirmer le mot de passe</label>
                                        <input required="required" type="password" class="form-control" id="password_confirmation" name="password_confirmation">

                                <div class="form-group">
                                        <button type="submit" class="btn btn-primary">S'inscrire</button>
				</div>

                                @include('layouts.errors')
                        </form>
                </div>
        </div><!-- /row -->
</div><!-- /container -->

@endsection
