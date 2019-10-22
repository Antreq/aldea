<?php

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/contacto', function () {
    return view('contact');
});

Route::get('/suscripcion', function () {
    return view('suscripcion');
});

Route::get('/crear', function () {
    return view('crear');
});

Route::get('/elements', function () {
    return view('elements');
});

Route::get('/faq', function () {
    return view('faq');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


