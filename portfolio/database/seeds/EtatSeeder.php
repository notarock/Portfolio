<?php

use Illuminate\Database\Seeder;
use App\Etat;

class EtatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    Etat::create([
		    'id'   => 1,
		    'name' => 'Hors ligne',
		    'description' => 'Ce projet est toujours enregistré, mais ne sera pas visible' 
		    . ' pour les utilisateurs du site',
	    ]);

	    Etat::create([
		    'id'   => 2,
		    'name' => "En développement",
		    'description' => 'Ce projet est en cours de développement. Il sera mis à jours dès que possible' 

	    ]);

	    Etat::create([
		    'id'   => 3,
		    'name' => 'Innactif',
		    'description' => 'Ce projet est en suspend. Il sera mis à jours dès que je recommencerer à le développer.',
	    ]);
    
	    Etat::create([
		    'id'   => 4,
		    'name' => 'Terminé',
		    'description' => 'Ce projet est terminé: Les mises à jours se feront donc très rarement.',
	    ]);
    }
}
