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
 
//untuk customer
Route::get('/customer','CustomerController@index');

//untuk pengendara
Route::get('/ride','RideController@index');
Route::post('/ride/create','RideController@create');
Route::get('/ride/{id}/edit','RideController@edit');
Route::post('/ride/{id}/update','RideController@update');
Route::get('/ride/{id}/delete','RideController@delete');
Route::get('/ride/cancel', function () {
    return redirect('ride');
});
Route::get('/ride/profil/{id}','RideController@profil');

//untuk mentor
Route::get('/mentor','MentorController@index');
Route::post('/mentor/create','MentorController@create');
Route::get('/mentor/{id}/edit','MentorController@edit');
Route::post('/mentor/{id}/update','MentorController@update');
Route::get('/mentor/{id}/delete','MentorController@delete');
Route::get('/mentor/profil/{id}','MentorController@profil');

//untuk message
Route::get('/massage','MassageController@index');
Route::post('/massage/create','MassageController@create');
Route::get('/massage/{id}/edit','MassageController@edit');
Route::post('/massage/{id}/update','MassageController@update');
Route::get('/massage/{id}/delete','MassageController@delete');
Route::get('/massage/profil/{id}','MassageController@profil');

//untuk nanny
Route::get('/nanny','NannyController@index');
Route::post('/nanny/create','NannyController@create');
Route::get('/nanny/{id}/edit','NannyController@edit');
Route::post('/nanny/{id}/update','NannyController@update');
Route::get('/nanny/{id}/delete','NannyController@delete');
Route::get('/profil/{id}','NannyController@profil');

//untuk booking
Route::get('/tr/pengendara','RideController@booking');