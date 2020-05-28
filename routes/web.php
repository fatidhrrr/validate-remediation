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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', 'InscriptionController@index')->name('inscription');
Route::get('/view', 'InscriptionController@create')->name('view');
Route::post("/saveInscription", "InscriptionController@store")->name("saveInscription");
Route::post('/update/{id}', "InscriptionController@update")->name("update");