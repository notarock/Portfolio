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

	public static function DDcategories()
	{
		$result =  db::raw('SELECT projets.categorie_id id, categories.name name, count(*) total
					from projets inner join categories on projets.categorie_id = categories.id
					group by id,name order by total DESC');
	
		return static::modelsFromRawResults($result);
	}		

}
