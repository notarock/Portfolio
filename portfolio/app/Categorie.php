<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function projets()
    {
    	return $this->hasMany(Projet::class);
    }
}
