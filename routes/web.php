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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/pets','pets');
Route::resource('/breeds','breeds');
<<<<<<< HEAD
Route::resource('/salons','salons');

=======
Route::resource('/users','users');
>>>>>>> 5e65b547e229093a0bbaa2efb0083ebcc1f4300e
Route::resource('/reservations','reservations');
Route::resource('/vaccines','vaccines');
Route::get('/findPet','genController@findPet');




Route::get('/genview','genController@genfunct');
Route::get('/findBreed','genController@findBreed');





