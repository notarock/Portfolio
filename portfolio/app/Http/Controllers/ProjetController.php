<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;

class ProjetController extends Controller
{
    //
	
	public function show(Projet $projet)
	{
		
		return view('projets.show',compact('projet'));

	}
	
	public function index()
	{	
        	$lstProjets = Projet::orderBy('updated_at','DESC')->paginate(9);
		return view('projets.index', compact('lstProjets'));
	}	
}
