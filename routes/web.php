<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'PostController@index');
Route::get('/about', 'PostController@showAbout');
Route::get('/news', 'PostController@showNews');





// Route::get('/about', function () {
//     return view('about', [
//         'title' => 'About'
//     ]);
// });

// Route::get('/news', function () {
//     return view('news', [
//         'title' => 'News'
//     ]);
// });


// Route::get('/kalkulasi', function () {
//     $a = 10;
//     $b = 5;
//     $c = $a * $b;
//     return $c;
// });

// Route::get('/segi-tiga', function () {
//     $alas = 10;
//     $tinggi = 4;
//     $luas = 1 / 2 * $alas * $tinggi;

//     return $luas;
// });

// Route::get('/persegi', function (Request $request) {
    //     $sisi = $request->get('sisi');
    //     $luas = $sisi * $sisi;
    
//     return $luas;
// });
// Route::get('/persegi/{input}', 'PostController@luasPersegi');
