<?php

namespace App\Http\Controllers;
use App\Chapitre;
use App\Projet;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;


class ChapitreController extends Controller
{

	public function __construct()
	{
		$this->middleware('isAdmin')->except( 'show');
	}

	public function show (Projet $projet, Chapitre $chapitre){

		return view('chapitres.show', compact ('chapitre', 'projet'));

	}

	public function update(Projet $projet,Chapitre $chapitre, Request $request)
	{

		$this->validate($request, [
			'name' => 'required',
			'textUp' => 'required',
			'textDown' => 'required',
			'position' => 'numeric',
		]);	

		if ($request->hasFile('picture')) {
			$image      = $request->file('picture');
			$fileName   = $request->file('picture')->getClientOriginalName();		

			$image->move("img/chapitres/" . $chapitre->projet_id . "/",$fileName);	

			$chapitre->picture = $fileName;
		} 

		$chapitre->name = $request->name;
		$chapitre->textUp = $request->textUp;
		$chapitre->textDown = $request->textDown;
		$chapitre->position = $request->position;

		$chapitre->update();

		Session::flash('status', 'Chapitre ' . $chapitre->name . ' a été modifié!');
		return redirect('/projets/' . $projet->id . "/chapitres/" . $chapitre->id);
	}	

	/**
	 * Affiche la liste des catégories.
	 *
	 * @return View qui affiche 12 catégories par pages.
	 */
	public function index()
	{	
		$lstChapitres = Chapitre::orderBy('updated_at','DESC')->paginate(12);

		return view('chapitres.index', compact('lstChapitres'));
	}

	/**
	 * Affiche la page de création d'un nouveau projet
	 * 
	 * @return Formulaire de création d'une catégorie
	 */
	public function create(Projet $projet)
	{

		$chapitre = new Chapitre();

		return view('chapitres.create', compact('projet', 'chapitre'));
	}


	/**
	 * Enregistre la nouvelle chapitre dans la base de données
	 *
	 * @return Page show de la nouvelle chapitre et status qui prouve que la catégorie
	 *  a bien été créée
	 */
	public function store(Request $request, Projet $projet)
	{	

		$this->validate($request, [
			'name' => 'required',
			'textUp' => 'required',
			'textDown' => 'required',
			'position' => 'numeric',
		]);	

		$chapitre = new Chapitre;

		if ($request->hasFile('picture')) {
			$image      = $request->file('picture');
			$fileName   = $request->file('picture')->getClientOriginalName();	

			$image->move("img/chapitres/" . $chapitre->projet_id . "/",$fileName);	

			$chapitre->picture = $fileName;
		} 

		$chapitre->name = $request->name;
		$chapitre->textUp = $request->textUp;
		$chapitre->textDown = $request->textDown;
		$chapitre->position = $request->position;
		$chapitre->projet_id = $projet->id;

		$chapitre->save();

		Session::flash('status', 'Chapitre ' . $chapitre->name . ' a été enregistré!');
		return redirect('/projets/' . $projet->id . "/chapitres/" . $chapitre->id);

	}

	/**
	 *
	 */	
	public function edit(Projet $projet, Chapitre $chapitre)
	{

		return view('chapitres.edit', compact('chapitre'));

	}


	public function delete(Projet $projet, Chapitre $chapitre)
	{
	
		return view('chapitres.delete', compact('chapitre'));
	}


	public function destroy(Projet $projet, Chapitre $chapitre)
	{
		$nomChapitre = $chapitre->name;

		$chapitre->delete();

		Session::flash('status', 'Le chapitre ' 
			. $nomChapitre .
			' a été supprimée définitivement!');

		return Redirect('/projets/'. $projet->id );
	}
}

