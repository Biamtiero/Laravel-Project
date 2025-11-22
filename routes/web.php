<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get ('/contact', function (){
    return view('contact' ,['title' => 'contact Page']);
});

Route ::get('/about', function(){
    return view('about', ['title'=> 'about Page']);
});
Route ::get('/blog', function(){
    return view('blog', ['title'=> 'blog Page']);
});
Route ::get('/reports ', function(){
    return view('reports', ['title' => 'reports Page']);
});