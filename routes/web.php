<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $footer = config('footerlist.list');
    $comicList = config('comics.comics');
    $features = config('sections.sections');
    $navbar = config('nav.navbar');
    return view('home', compact('footer', 'comicList', 'features', 'navbar'));
})->name('home');

Route::get('/news', function () {
    return view('news');
})->name('news');
