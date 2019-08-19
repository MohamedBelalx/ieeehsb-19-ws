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

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Storage;
use App\Post;

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('/register', function(){
    return redirect('home');
});     
//Guest user
Route::get('/home', 'ArticleGuestController@index');
Route::get('/about', 'ArticleGuestController@about');
Route::get('/events', 'ArticleGuestController@events');
Route::get('/wie', 'ArticleGuestController@wie');
Route::get('/ras', 'ArticleGuestController@ras');
Route::get('/magazine', 'ArticleGuestController@magazine');

Route::get('/articles', 'PostsController@index');
Route::get('/', 'ArticleGuestController@index');
Route::get('/articles/{id}/view', 'PostsController@viewPost');


//User
Route::get('/adduser', 'UserController@viewAdd');
Route::post('/adduser', 'UserController@addUser');
Route::get('/users', 'UserController@index');
//Route::resource('/users', 'UserController');

Route::get('users/{id}', 'UserController@destroy');

Route::resource('articles-dashboard', 'PostsController');



Route::get('/create', 'PostsController@create');
Route::post('/create', 'PostsController@store');

Route::post('/articles-dashboard/{id}', 'PostsController@update');
Route::get('/articles-dashboard/{id}/destroy', 'PostsController@destroy');

Route::get('/articles-dashboard/{id}/view', 'PostsController@viewPost');

/* IEEE'20 volunteers recruitment */ 

Route::get('/ieee-20/volunteers',[
    'uses' => 'RegForm@index',
    'as' => 'reg'
]);

Route::post('/ieee-20/volunteers/reg',[
    'uses' => 'RegForm@store',
    'as' => 'reg'
]);
Route::get('/ieee-20/volunteers/thanks',[
    'uses' => 'RegForm@thanks',
    'as' => 'thanks'
]);

/* IEEE'20 volunteers recruitment */ 