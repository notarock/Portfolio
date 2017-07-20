<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Projet;
use App\Categorie;
class Categorie extends Model
{
	public function projets()
	{
		return $this->hasMany(Projet::class);
	}

	public function total()
	{
		return $this->projets->count();	
	}

	public static function DDcategories()
	{	
		return Categorie::get()->sortByDesc(function($categorie){
			return $categorie->projets->count();
		})->take(3);
	}
}
