<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', "TodoController@home")->name('home');

Route::post('/create', "TodoController@store")->name('store');

Route::get('/about-us', function(){
    return "<h1>About-us</h1>";
});

Route::get('/contact-us', );
