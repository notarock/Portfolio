<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
	
	public function create()
	{
		return view('registration.create');
	}

	public function store()
	{
		$this->validate(request(),[
			
		]);

		$user = User::create([

		]);

		auth()->login($user);

		return redirect()->home();
		
	}

}
