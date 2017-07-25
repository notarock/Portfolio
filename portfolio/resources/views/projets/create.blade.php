
@extends('layouts.master')

@section('content')

{{--	<!-- +++++ Projects Section +++++ -->

	<div class="container pt">


	<form method="POST" action="/projets">

		
		@include('projets.editable')

	{{-- </form> --}}


		<div class="form-group">
			<textarea name="name" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Enregistrer</button>
		</div>
	</form>


	</div><!-- /container -->

--}}

@endsection
