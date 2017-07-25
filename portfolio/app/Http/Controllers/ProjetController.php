<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;
use Session;
class ProjetController extends Controller
{

	/**
	 * Middleware pour les methodes du controller des Projets
	 *
	 */
	public function __construct()
	{
		$this->middleware('isAdmin')->except('index', 'show');
		
	}	

	/**
	 * Retourne la liste des projets 
	 *
	 * @return View qui affiche 9 projets paginé
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
		dd('create methode');
		return view('projets.create');
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
		

}
