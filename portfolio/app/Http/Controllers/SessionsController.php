<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest', ['except' => 'destroy']);
	}	


	public function create()
	{
		return view('sessions.create');
	}

	public function store()
	{
		if(! auth()->attempt(request(['email','password'])))
		{



			return back()->witherrors([
				'message' => 'Veuiller entre vos coordonnées et réessayé'
			]);

		}

		return redirect('/');

	}

	public function destroy()
	{
		Auth()->logout();

		return redirect()->home();
	}

}
