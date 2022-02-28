<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $posts = News::all(); //fetch all blog posts from DB
        $posts = News::orderBy('created_at', 'desc')->limit(4)->get();
        return view('welcome', [
            'posts' => $posts,
        ]); //returns the view with posts
        return view('welcome');
    }
}
