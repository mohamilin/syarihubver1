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

Route::get('/dashboard', function () {
    return view('admin.layouts.dashboard');
});

//untuk pengendara
Route::get('/ride','RideController@index');
Route::post('/ride/create','RideController@create');
Route::get('/ride/{id}/edit','RideController@edit');
Route::post('/ride/{id}/update','RideController@update');
Route::get('/ride/{id}/delete','RideController@delete');
Route::get('/ride/cancel', function () {
    return redirect('ride');
});

//untuk mentor
Route::get('/mentor','MentorController@index');
Route::post('/mentor/create','MentorController@create');
Route::get('/mentor/{id}/edit','MentorController@edit');
Route::post('/mentor/{id}/update','MentorController@update');
Route::get('/mentor/{id}/delete','MentorController@delete');

//untuk message
Route::get('/massage','MassageController@index');