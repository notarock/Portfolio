<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	
	public function index()
	{
        $blogs = App\Blog::archives();

		return view('blogs.index', compact('blogs'));

	}



}
