<?php

namespace App\Http\Controllers;
use App\Chapitre;
use App\Projet;

use Illuminate\Http\Request;

class ChapitreController extends Controller
{

	public function show (Projet $projet, int $id){



		$chapitre = Chapitre::find($id);



		return view('chapitres.show', compact ('chapitre'));
		
	}
}
