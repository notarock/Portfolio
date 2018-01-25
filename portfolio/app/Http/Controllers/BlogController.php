<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $lstBlog = Blog::orderBy('created_at', 'DESC')->paginate(5);
        foreach($lstBlog as $blog)
        {
            $blog->body = substr($blog->body, 0, 350) . '...';
        }

        return view('blogs.index', compact('lstBlog'));
    }


    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog') );
    }



    /**
     * Affiche la page pour créer un nouveau blog
     *
     * @return Formulaire de création d'un blog
     */
    public function create()
    {

        $blog = new Blog();
        return view('blogs.create',compact('blog'));
    }

	/**
	 * Enregistre le nouveau blog dans la base de données
	 *
	 * @return Page show du nouveau blog et status qui prouve que le blog
	 *  a bien été créer
	 */
	public function store(Request $request)
	{

		$this->validate($request, [
			'title' => 'required',
			'body' => 'required',
		]);

		$blog = new Blog;

		$blog->title = $request->title;
		$blog->body = $request->body;

		$blog->save();

		Session::flash('status', 'Blog ' . $blog->name . ' a été créer!');
		return redirect('/blogs/' . $blog->id);

	}

	/**
	 * Affiche la page qui permet de modifier le Blog
	 *
	 * @param int $id
	 */
	public function edit(Blog $blog)
	{
		return view('blogs.edit', compact('blog'));
	}



	/*
	 * Enregistre les modifications effectués sur ce projet
	 *
	 * @param Projet: Projet modifié
	 */
	public function update(Blog $blog, Request $request)
	{

		$this->validate($request, [
			'title' => 'required',
			'body' => 'required',
		]);

		$blog->title = $request->title;
		$blog->body = $request->body;

		$blog->save();

		Session::flash('status', 'Projet '. $projet->name . ' modifié!');
		return redirect('/projets/' . $projet->id);

	}	

	public function delete(Blog $blog)
	{
		return view('blogs.delete', compact('blog'));
	}


	public function destroy(Blog $blog)
	{
		$nomBlog = $blog->name;

		$blog->delete();

		Session::flash('status', 'La catégorie ' 
                       . $nomBlog .
                       ' a été supprimée définitivement!');

		return Redirect('/blogs' );
	}

    
}
