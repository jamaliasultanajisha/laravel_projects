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
//Auth::routes();

Route::get('/profile', 'ProfileController@index')->name('profile');

Auth::routes();

Route::get('/demo', 'DemoController@index')->name('demo');
Route::post('/demo/store', 'DemoController@create');

Auth::routes();

Route::get('/test', 'TestController@index')->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/gmaps', 'HomeController@gmaps');

Route::get('/views', 'HomeController@views');

Route::get('/sendmail', 'SendEmailController@index');

Route::post('/sendmail/send', 'SendEmailController@send');

Auth::routes();
Route::get('search', 'SearchController@index')->name('search');
Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');

Auth::routes();
Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Auth::routes();
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
Auth::routes();
Route::get('image-upload/show', 'ImageUploadController@imageShow');

