<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;
use App\User;
use App\Blog;
use Session;

class HomeController extends Controller
{

	//    /**
	//     * Create a new controller instance.
	//     *
	//     * @return void
	//     */
	//    public function __construct()
	//    {
	//        $this->middleware('auth');
	//   }

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{

		$lstProjets = Projet::orderBy('updated_at','DESC')->take(3)->get();

        $lstBlog = Blog::orderBy('created_at', 'DESC')->get()->take(3);
        foreach($lstBlog as $blog)
        {
            $blog->body = substr($blog->body, 0, 350) . '...';
        }

		return view('home.index', compact('lstProjets'), compact('lstBlog'));
	}


	public function profile()
	{
		$profile = User::first();

		return view('profiles.show', compact ('profile'));
	}

	public function testy()
	{

		Session::flash('status', 'Testing 1 2 3');	

		return redirect('/');
	}

}
