<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('home', ['title' => 'Home']);
    }

    public function showAbout()
    {
        return view('about', ['title' => 'About']);
    }
    public function showNews()
    {
        $posts = Post::all();
        return view('news', ['title' => 'News', 'posts' => $posts]);
    }

    public function create(Request $request)
    {
        // dd($request->all());
        $data = new Post();

        $data->title = $request->get('title');
        $data->reporter = $request->get('reporter');
        $data->content = $request->get('content');
        $data->save();
        return back();
    }

    public function show($id)
    {
        $data = Post::find($id);
        return view('update', ['title' => 'News', 'data' => $data]);
    }
}
