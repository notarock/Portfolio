<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Projet;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Session;

class CategorieController extends Controller
{

	/**
	 * Middleware pour les methodes du controller des Projets.
	 *
	 */
	public function __construct()
	{
		$this->middleware('isAdmin')->except('index', 'show');
	}

	/**
	 * Affiche une catégorie sélectionnée ainsi que les projets de la catégorie
	 *
	 * @return View affichant la catégorie et la liste des projets
	 */
	public function show(Categorie $categorie)
	{
		$lstProjets = Projet::where('categorie_id', $categorie->id)->orderBy('updated_at', 'DESC')->paginate(9)	;	
		return view('categories.show',compact('categorie', 'lstProjets'));

	}

	public function update(Categorie $categorie, Request $request)
	{

		$this->validate($request, [
			'name' => 'required|max:100',
			'description' => 'required',
		]);	

		if ($request->hasFile('picture')) {
			$image      = $request->file('picture');
			$fileName   = $request->file('picture')->getClientOriginalName();	

			$image->move("img/categories/",$fileName);	

			$categorie->picture = $fileName;
		} 

		$categorie->name = $request->name;
		$categorie->description = $request->description;

		$categorie->update();

		Session::flash('status', 'Categorie ' . $categorie->name . ' a été modifié!');
		return redirect('/categories/' . $categorie->id);
	}	

	/**
	 * Affiche la liste des catégories.
	 *
	 * @return View qui affiche 12 catégories par pages.
	 */
	public function index()
	{	
		$lstCategories = Categorie::orderBy('updated_at','DESC')->paginate(12);

		return view('categories.index', compact('lstCategories'));
	}


	/**
	 * Affiche la page de création d'un nouveau projet
	 * 
	 * @return Formulaire de création d'une catégorie
	 */
	public function create()
	{

		$categorie = new Categorie();

		return view('categories.create', compact('categorie'));
	}


	/**
	 * Enregistre la nouvelle categorie dans la base de données
	 *
	 * @return Page show de la nouvelle categorie et status qui prouve que la catégorie
	 *  a bien été créée
	 */
	public function store(Request $request)
	{	

		$this->validate($request, [
			'name' => 'required|max:100',
			'description' => 'required',
			'picture' => 'required',	
		]);

		$categorie = new Categorie;

		if ($request->hasFile('picture')) {
			$image      = $request->file('picture');
			$fileName   = $request->file('picture')->getClientOriginalName();	

			$image->move("img/categories/",$fileName);	

			$categorie->picture = $fileName;
		} 

		$categorie->name = $request->name;
		$categorie->description = $request->description;

		$categorie->save();

		Session::flash('status', 'Categorie ' . $categorie->name . ' a été créer!');
		return redirect('/categories/' . $categorie->id);

	}

	/**
	 *
	 */	
	public function edit(Categorie $categorie)
	{
	return view('categories.edit', compact('categorie'));

	}


	public function delete(Categorie $categorie)
	{
		return view('categories.delete', compact('categorie'));
	}


	public function destroy(Categorie $categorie)
	{
		$nomCategorie = $categorie->name;

		$categorie->delete();

		Session::flash('status', 'La catégorie ' 
			. $nomCategorie .
			' a été supprimée définitivement!');

		return Redirect('/categories' );
	}
}
