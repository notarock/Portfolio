<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public function user()
    {
    	return $this->hasOne(User::class);
    }

    public function chapitres()
    {
    	return $this->hasMany(Chapitre::class);
    }

    public function cadre()
    {
    	return $this->hasOne(Cadre::class);
    }

    public function categorie()
    {
    	return $this->hasOne(Categorie::class);
    }
}
