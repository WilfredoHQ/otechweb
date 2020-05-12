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

Route::redirect('/', 'index');

Route::get('/index', 'Web\PageController@index')->name('index');
Route::get('/about', 'Web\PageController@about')->name('about');
Route::get('/services', 'Web\PageController@services')->name('services');
Route::get('/projects', 'Web\PageController@projects')->name('projects');
Route::get('/contact', 'Web\PageController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
