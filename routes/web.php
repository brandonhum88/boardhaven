<?php

// use Illuminate\Support\Facades\Redis;

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

// dd(resolve('App\Billing\Stripe'));
// Route::get('/', function () {
//     Redis::set('name', 'Brandon');
//     return Redis::get('name');

    // Cache::put('name', 'Gerald', 10);
    // return Cache::get('name');
// });

Auth::routes();

Route::get('/', 'EventsController@index');

Route::get('/admin', 'AdminController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{game}', 'GamesController@show');

Route::get('/events', 'EventsController@index');
Route::get('/events/create', 'EventsController@create');
Route::post('/events', 'EventsController@store');
Route::get('/events/api/list', 'EventsController@list');
Route::post('events/{event}/comments', 'CommentsController@store');
Route::get('/events/{event}', 'EventsController@show');





Route::get('/kdm/settlements/{settlement}/departing', 'KDM\SurvivorsController@departingIndex');
