<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $posts = News::all(); //fetch all blog posts from DB
        $posts=News::orderBy('created_at','desc')->limit(5)->get();
        return view('blog', [
            'posts' => $posts,
        ]); //returns the view with posts
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(News $News)
    {
        return view('blog.show', [
            'post' => $News,
        ]); //returns the view with the post
    }

    public function edit(News $News)
    {
        //
    }

    public function update(Request $request, News $News)
    {
        //
    }

    public function destroy(News $News)
    {
        //
    }
}
