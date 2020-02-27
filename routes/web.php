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
use Maatwebsite\Excel\Facades\Excel;

Route::get('/download', function (){
    return Excel::download(new \App\Exports\ProductExport(),'product.xlsx');
});


Route::get('/', function () {
    return view('main');
});


Route::get('frontend.show', 'productFrontendController@show');
Route::get('frontend.showImage', 'imageController@showImage');
Route::get('products.showProductList', 'productController@show');

Route::get('product/{id}', ['as' => 'products.product', 'uses' => 'productController@index']); // for opening inside of product
Route::get('showCart/{id}', ['as' => 'showCart', 'uses' => 'showCartController@show']); // for adding product to cart


Route::group(['links' => 'link'], function(){
    Route::get('links.linkOne', 'linkController@show');
    Route::get('links.linkTwo', 'linkController@show2');
});

// for PDF only
Route::get('templateTest', 'testController@show'); // template pdf
Route::get('template', 'testController@index'); // download

Route::get('showCart', 'showCartController@index'); // only for test card!

Route::get('add-to-cart/{id}', 'productController@addToCart');
Route::patch('update-cart', 'productController@update');
Route::delete('remove-from-cart', 'productController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('search.search', 'searchController@search');
Route::get('/{id}', ['as' => 'products.product', 'uses' => 'searchController@index']); // for opening

Route::post('/', 'formController@storeEmail');


