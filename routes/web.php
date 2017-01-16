<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return \App\Story::all();
});

Route::get('/photos/{id}', 'PhotosController@show');
Route::get('/graphics/{slug}', 'GraphicsController@show');
Route::get('/layouts/{id}', 'LayoutsController@show');
Route::get('/section/{slug}', 'SectionsController@show');
Route::get('/staff/{slug}', 'StafferController@show');
Route::get('/special-sections/{slug}', 'SpecialSectionsController@show');
Route::get('/stories/{section}/{slug}', 'StoriesController@show');


Route::group(['prefix' => 'admin'], function() {
    Auth::routes();
    //Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'core'], function(){
        Route::get('/createStory', 'StoriesController@create')->name('create-story');
        Route::post('/createStory', 'StoriesController@store')->name('store-story');
        Route::get('/stories', 'StoriesController@index');
        Route::get('/editStory/{section}/{slug}', 'StoriesController@edit')->name('edit-story');
        Route::patch('/editStory/{section}/{slug}', 'StoriesController@update')->name('update-story');

        Route::group(['prefix' => 'web-front'], function(){
           Route::get('/', 'WebFrontController@index');
           Route::get('/{section}', 'WebFrontController@show')->name('edit-web-front');
        });

        Route::group(['prefix' => 'photos'], function(){
           Route::get('/', 'PhotosController@index');
           Route::get('/create', 'PhotosController@create')->name('create-photo');
           Route::post('/create', 'PhotosController@store')->name('store-photo');
           Route::patch('/edit/{id}', 'PhotosController@update')->name('update-photo');
           Route::get('/edit/{id}', 'PhotosController@edit')->name('edit-photo');
        });
    });
	//});
});