<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', 'PostController@home');
Route::get('/posts/clip', 'PostController@clip');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/show', 'PostController@show');
Route::post('/posts/store', 'PostController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
