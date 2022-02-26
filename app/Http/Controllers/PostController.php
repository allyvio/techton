<?php

namespace App\Http\Controllers;

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
        return view('news', ['title' => 'News']);
    }

    // public function luasPersegi($input)
    // {
    //     $sisi = $input;
    //     $luas = $sisi * $sisi;
    //     return $luas;
    // }
}
