<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Auth;
use App\Projet;
use Session;

class ProjetController extends Controller
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
	 * Retourne la liste des projets 
	 *
	 * @return View qui affiche la liste des projets paginés par tranche de 9. 
	 *
	 */
	public function index()
	{	

		$lstProjets = Projet::orderBy('updated_at','DESC')->paginate(9);
		return view('projets.index', compact('lstProjets'));
	}	



	/**
	 * Montre un projet donnée
	 *
	 * @param  int  $id
	 * @return view show
	 */
	public function show(Projet $projet)
	{

		return view('projets.show',compact('projet'));

	}



	/**
	 * Affiche la page pour créer un nouveau projet
	 *
	 * @return Formulaire de création d'un projet
	 */
	public function create()
	{
		return view('projets.create');
	}



	public function store(Request $request)
	{

		$this->validate($request, [
			'name' => 'required|max:100',
			'picture' => 'required',
			'categorie_id' => 'required',
			'etat_id' => 'required',
		]);

		$projet = new Projet;

		if ($request->hasFile('picture')) {
			$image      = $request->file('picture');
			$fileName   = $request->file('picture')->getClientOriginalName();	

			$image->move("img/projets/",$fileName);	

			$projet->picture = $fileName;
		} 



		$projet->name = $request->name;
		$projet->description = $request->description;
		$projet->lien_github = $request->lien_github;
		$projet->categorie_id = $request->categorie_id;
		$projet->etat_id = $request->etat_id;
		$projet->user_id = Auth::id();



		$projet->save();

		Session::flash('status', 'Projet ' . $projet->name . ' a été créer!');
		return redirect('/projets/' . $projet->id);

	}


	/**
	 * Demande une confirmation avant de supprimer le projet
	 *
	 * @param  int  $id
	 * @return View show + demande de confirmation
	 */
	public function delete(Projet $projet)
	{

		return view('projets.delete', compact('projet'));
	}



	/**
	 * Retire le projet de la base de données
	 *
	 * @param  int  $id
	 * @return Message de confirmation
	 */
	public function destroy(Projet $projet)
	{
		$nomProjet = $projet->name;

		$projet->delete();

		Session::flash('status', 'Le projet ' 
			. $nomProjet .
			' a été supprimé avec succès!');

		return Redirect('/projets' );

	}



	/**
	 * Affiche la page qui permet de modifier le projet
	 *
	 * @param int $id
	 */
	public function edit(Projet $projet)
	{

		return view('projets.edit', compact('projet'));
	}



	/**
	 * Enregistre les modifications effectués sur ce projet
	 *
	 * @param Projet: Projet modifié
	 */
	public function update(Projet $projet, Request $request)
	{

		$this->validate($request, [
			'name' => 'required|max:100',
			'picture' => 'required',
			'categorie_id' => 'required',
			'etat_id' => 'required',
		]);

		$projet = new Projet;

		if ($request->hasFile('picture')) {
			$image      = $request->file('picture');
			$fileName   = $request->file('picture')->getClientOriginalName();	

			$image->move("img/projets/",$fileName);	

			$projet->picture = $fileName;
		} 



		$projet->name = $request->name;
		$projet->description = $request->description;
		$projet->lien_github = $request->lien_github;
		$projet->categorie_id = $request->categorie_id;
		$projet->etat_id = $request->etat_id;

		$projet->save();

		Session::flash('status', 'Projet '. $projet->name . ' modifié!');
		return redirect('/projets/' . $projet->id);

	}	


}
