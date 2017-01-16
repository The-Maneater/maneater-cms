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
    Route::group(['prefix' => 'core'], function(){
        Route::group(['prefix' => 'stories'], function(){
            Route::get('/create', 'StoriesController@create')->name('create-story');
            Route::post('/create', 'StoriesController@store')->name('store-story');
            Route::get('/', 'StoriesController@index');
            Route::get('/edit/{section}/{slug}', 'StoriesController@edit')->name('edit-story');
            Route::patch('/edit/{section}/{slug}', 'StoriesController@update')->name('update-story');
        });

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

        Route::group(['prefix' => 'events'], function(){
           Route::get('/', 'EventController@index');
           Route::get('/create', 'EventController@create')->name('create-event');
           Route::post('/create', 'EventController@store')->name('store-photo');
           Route::patch('/edit/{id}', 'EventController@update@update')->name('update-event');
           Route::get('/edit/{id}', 'EventController@edit')->name('edit-event');
        });

        Route::group(['prefix' => 'layouts'], function(){
           Route::get('/', 'LayoutsController@index');
           Route::get('/create', 'LayoutsController@create')->name('create-layout');
           Route::post('/create', 'LayoutsController@store')->name('store-layout');
           Route::patch('/edit/{id}', 'LayoutsController@update')->name('update-layout');
           Route::get('/edit/{id}', 'LayoutsController@edit')->name('edit-layout');
        });

        Route::group(['prefix' => 'graphics'], function(){
            Route::get('/', 'GraphicsController@index');
            Route::get('/create', 'GraphicsController@create')->name('create-graphic');
            Route::post('/create', 'GraphicsController@store')->name('store-graphic');
            Route::patch('/edit/{id}', 'GraphicsController@update')->name('update-graphic');
            Route::get('/edit/{id}', 'GraphicsController@edit')->name('edit-graphic');
        });
    });
});