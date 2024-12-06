<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view-1', function() {
    return view('view-1', ["name"=> "abc"]);
});
Route::get('/view-2', function() {
    return view('view-2', ["arr"=> ['1', '2', '3']]);
});


#Template Blade Layout
Route::get('/home',function(){
    return view('index');
    });
Route::get('/about-us',function(){
    return view('about');
    });
Route::get('/contact',function(){
    return view('contact');
});
