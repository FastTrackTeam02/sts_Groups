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


Route::prefix('admin')->group(function () {


    Route::get('sofa', 'SofaController@list')->name('sofa');
    Route::get('sofa/create', 'SofaController@create')->name('sofa-create');
    Route::post('sofa/store', 'SofaController@store')->name('sofa-store');
    Route::get('sofa/edit', 'SofaController@edit')->name('sofa-edit');
    Route::post('sofa/update', 'SofaController@update')->name('sofa-update');
    Route::get('sofa/delete', 'SofaController@delete')->name('sofa-delete');
    Route::get('sofa/show', 'SofaController@show')->name('sofa-show');


});