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
}
