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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/audits', 'HomeController@audits')->name('audits');
Route::get('/upload','uploadController@index')->name('upload');
Route::post('/store','uploadController@store')->name('upload.post');
Route::get('/uploads/view','ViewUploadController@showviewuploadForm')->name('uploads.view');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
