<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapitreController extends Controller
{
	factory(App\Chapitre::class, 10)->create();
}
