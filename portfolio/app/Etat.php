<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 0 = non-publié
 * 1 = En développement
 * 2 = inactif
 * 3 = terminé
 *
 */


class Etat extends Model
{

	public function projets()
	{
		return $this->belongsToMany(App\Projet::class);
	}
}
