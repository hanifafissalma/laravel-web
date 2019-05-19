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

Route::get('/consultant', function () {
    return view('consultant');
});
Route::get('/training', function () {
    return view('training');
});
Route::get('/consulting', function () {
    return view('consulting');
});
Route::get('/publication', function () {
    return view('publication');
});
Route::get('/publication/publication-detail', function () {
    return view('publication/publication-detail');
});
Route::get('/publication/archive', function () {
    return view('publication/archive');
});
Route::get('/contact', function () {
    return view('contact');
});