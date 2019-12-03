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
});

Auth::routes();
/*
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', ['middleware' => ['web','auth'], function ()
{
	dump(Auth::user()->name);
	//return view('test');
}])->name('test');



Route::get('/vk', function () {
  // Только аутентифицированные пользователи могут зайти...
})->middleware('auth.basic');*/