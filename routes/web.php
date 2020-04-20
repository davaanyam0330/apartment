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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/template', function(){
    return view('layouts.layout_master');
});



//ereenii burtgel start
Route::get("/products/register", "RegisterProductsController@productsShow");
Route::get("/getProducts", "RegisterProductsController@getProducts");

Route::post("/product/store", "RegisterProductsController@store");
//ereenii burtgel end

// START ADMIN HESEG
Route::get('/admins', 'AdminController@showAdmin');
Route::post('/show/admins', 'AdminController@getAdmins');
// END ADMIN HESEG
