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

// Route::get('/', function () {
//     return view('welcome');
// });

// Home Page
Route::get('/home', 'PagesController@index');

// Talent Page
Route::get('/talent', 'PagesController@talent');

// Virtualpedia Page
Route::get('/virtualpedia', 'PagesController@virtualpedia');

// Team Page
Route::get('/team', 'PagesController@team');
