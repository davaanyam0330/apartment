<?php
use RealRashid\SweetAlert\Facades\Alert;
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
  Alert::success('Success Title', 'Success Message');
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

//анги start
Route::get('/getAngi', 'angiController@angiGetJson');
Route::get("angi/show", "angiController@angiShow");
Route::get("/angi/store", "angiController@store");
Route::post("/angi/update", "angiController@update");
Route::post("/angiID/delete", "angiController@angiIDdelete");
Route::post("/angi/ImagePath", "angiController@setImagePath");
Route::post("/angi/uploadImage", "angiController@ImageUpload");  // upload image
Route::get("/angi/ImageDelete", "angiController@ImageDelete");
Route::get("/angi/fetch", "angiController@fetch")->name('angiImages.fetch');

Route::get("/angi/seeImage/{id}", "angiController@angiSeeImage");
Route::post("/angi/checkPath", "angiController@angiCheckPath");


Route::get("/album", "ImageController@index")->name('album.index');
Route::post("/album", "ImageController@store")->name('album.store');

Route::get('dropzone', 'DropzoneController@index');
Route::post('dropzone/upload', 'DropzoneController@upload')->name('dropzone.upload');
Route::get('dropzone/fetch', 'DropzoneController@fetch')->name('dropzone.fetch');
Route::get('dropzone/delete', 'DropzoneController@delete')->name('dropzone.delete');

Route::get('upload', 'ImageUploadController@index');
Route::post('upload/store', 'ImageUploadController@store');
Route::post('delete', 'ImageUploadController@delete');


//анги end

// START DADAA FILE manager
Route::get('/dada/file/manager/home/{type}', 'dadaaFileManagerController@dadaaFileManagerShow');
Route::post('/dada/file/manager/new/folder', 'dadaaFileManagerController@createFolder');
Route::get('/dada/file/manager/edit/folder', 'dadaaFileManagerController@editFolder');
Route::post('/dada/file/manager/delete/folder', 'dadaaFileManagerController@deleteFolder');
Route::post('/dada/file/manager/get/left/folder', 'dadaaFileManagerController@getLeftFolders');
Route::post('/dada/file/manager/get/right/folder', 'dadaaFileManagerController@getRightFolders');
Route::post('/dada/file/manager/upload/image', 'dadaaFileManagerController@resizeImagePost');
Route::post('/dada/file/manager/delete/image', 'dadaaFileManagerController@deleteFile');
// END DADAA FILE MANAGER
