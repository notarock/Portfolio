<?php

namespace App\Http\Controllers;
use App\Chapitre;

use Illuminate\Http\Request;

class ChapitreController extends Controller
{

	public function show (Chapitre $chapitre){

		return view('chapitres.show', compact ('chapitre'));
		
	}
}
