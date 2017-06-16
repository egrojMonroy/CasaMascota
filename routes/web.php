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

//Chris

Route::resource('/reservations','reservations');
Route::get('/findPet','genController@findPet');


Route::resource('/rooms','rooms');
Route::resource('/assignations','assignations');

//end Chris

//Pietro
Route::get('/home', 'HomeController@index');
Route::resource('/pets','pets');
Route::resource('/breeds','breeds');
Route::resource('/salons','salons');
Route::get('/genview','genController@genfunct');
Route::get('/findBreed','genController@findBreed');
//end Pietro

//Jorge
Route::resource('/vaccines','vaccines');
Route::resource('/users','users');
Route::get('/users/{user}/edit2 ','users@edit_own');
Route::get('/update/{user}','users@update_own')->name('users.update_own');
Route::get('/findFranja','genController@findFranja');
Route::get('/findSala','genController@findSala');
//End Jorge

