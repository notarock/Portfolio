<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;

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

        $lstProjets = Projet::orderBy('updated_at','DESC')->take(6)->get();

        return view('home.index', compact('lstProjets'));
    }
}
