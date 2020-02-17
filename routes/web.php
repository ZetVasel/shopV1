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
    return view('main');
});


Route::get('frontend.show', 'productFrontendController@show');
Route::get('frontend.showImage', 'imageController@showImage');

Route::get('product/{id}', ['as' => 'products.product', 'uses' => 'productController@index']); // for opening inside of product


Route::group(['links' => 'link'], function(){
    Route::get('links.linkOne', 'linkController@show');
    Route::get('links.linkTwo', 'linkController@show2');
});

// for PDF only
Route::get('templateTest', 'testController@show'); // template pdf
Route::get('template', 'testController@index'); // download

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('search.search', 'searchController@search');
Route::get('/{id}', ['as' => 'products.product', 'uses' => 'searchController@index']); // for opening

Route::post('/', 'formController@storeEmail');
