<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
	public function projet()
	{
		return $this->belongsTo(Projet::class);
	}
}
