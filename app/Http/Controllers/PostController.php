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
        // dd($post);
        return view('news', ['title' => 'News', 'posts' => $posts]);
    }

    // public function luasPersegi($input)
    // {
    //     $sisi = $input;
    //     $luas = $sisi * $sisi;
    //     return $luas;
    // }
}
