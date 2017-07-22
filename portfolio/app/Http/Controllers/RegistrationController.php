<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('SoloAdmin');
	}


	public function create()
	{
		return view('registration.create');
	}

	public function store()
	{
		$this->validate(request(),[
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed'
		]);

		$user = User::create([
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed'
		]);

		auth()->login($user);

		return redirect()->home();

	}

}
