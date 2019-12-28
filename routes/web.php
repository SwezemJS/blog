<?php
use Illuminate\Support\Facades\Auth;
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
})->name('index');
Route::get('/posts','HomeController@index')->name('posts');
Route::get('/posts/{id?}','HomeController@post_view')->where('id', '[0-9]+')->name('post_view');

Route::group(['prefix' => 'new'], function () {

		Route::get('post','HomeController@newpost')->name('n_post');
		Route::post('add_post','HomeController@addpost')->name('add_post');

});
Route::get('/massive','HomeController@massive')->name('posts');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
/*
Route::get('/test', ['middleware' => ['web','auth'], function ()
{
	dump(Auth::user()->name);
	//return view('test');
}])->name('test');



Route::get('/vk', function () {
  // Только аутентифицированные пользователи могут зайти...
})->middleware('auth.basic');*/
