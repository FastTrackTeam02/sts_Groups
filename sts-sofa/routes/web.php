<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('sofa', 'SofaController')->only([
//     'index', 'show'
// ]);

Route::get('sofa', 'SofaController@index')
    ->name('sofa'); //list
Route::get('sofa/show/{id}', 'SofaController@show')->where('id', '[0-9]+')
    ->name('sofa-show'); //show detail
