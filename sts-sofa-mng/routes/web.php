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


    Route::get('sofa', 'AdminSofaController@list')->name('admin_sofa');
    Route::get('sofa/create', 'AdminSofaController@create')->name('admin_sofa-create');
    Route::post('sofa/store', 'AdminSofaController@store')->name('admin_sofa-store');
    Route::get('sofa/edit', 'AdminSofaController@edit')->name('admin_sofa-edit');
    Route::post('sofa/update', 'AdminSofaController@update')->name('admin_sofa-update');
    Route::get('sofa/delete', 'AdminSofaController@delete')->name('admin_sofa-delete');
    Route::get('sofa/show', 'AdminSofaController@show')->name('admin_sofa-show');

});



    Route::get('product', 'ClientProductController@list')->name('client_product');
    Route::get('product/show', 'ClientProductController@show')->name('client_product-show');

    Route::post('customer/register', 'ClientApiController@customerRegister')->name('client_customer-register');
    // Route::get('sofa/create', 'AdminSofaController@create')->name('admin_sofa-create');
    // Route::post('sofa/store', 'AdminSofaController@store')->name('admin_sofa-store');
    // Route::get('sofa/edit', 'AdminSofaController@edit')->name('admin_sofa-edit');
    // Route::post('sofa/update', 'AdminSofaController@update')->name('admin_sofa-update');
    // Route::get('sofa/delete', 'AdminSofaController@delete')->name('admin_sofa-delete');

