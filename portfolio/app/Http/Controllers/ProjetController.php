<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;

class ProjetController extends Controller
{

	/**
	 * Middleware pour les methodes du controller des Projets
	 *
	 */
	public function __construct()
	{
		$this->middleware('isAdmin')->only('delete', 'destroy');
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
	 * @return Response
	 */
	public function destroy(Projet $projet)
	{

		$projet->delete();
		
		return Redirect('/projets');
	}

}
