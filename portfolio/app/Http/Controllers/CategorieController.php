<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Projet;

class CategorieController extends Controller
{


	public function show(Categorie $categorie)
	{
		$lstProjets = Projet::where('categorie_id', $categorie->id)->orderBy('updated_at', 'DESC')->paginate(9)	;	
		return view('categories.show',compact('categorie', 'lstProjets'));

	}
	
	public function index()
	{	
        	$lstCategories = Categorie::orderBy('updated_at','DESC')->paginate(12);

		return view('categories.index', compact('lstCategories'));
	}
}
