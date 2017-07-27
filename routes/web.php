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

//Route::domain('move.' . config('app.base'))->group(function(){
//    Route::get('/', function(){
//        return Route::current()->domain();
//    });
//});

Route::get('/', 'PagesController@frontpage');
Route::get('/search', 'SearchController@show');

Route::get('/photos/{id}', 'PhotosController@show');
//Route::get('/graphics', function(){
//    return "Graphics";
//});
Route::get('/graphics/{graphic}', 'GraphicsController@show');
Route::get('/layouts/{id}', 'LayoutsController@show');
Route::get('/section/{slug}', 'SectionsController@show');
Route::get('/section/{slug}/archives', 'SectionArchivesController@show');
Route::get('/staff/editors', 'PagesController@editorialBoard');
Route::get('/staff/{slug}', 'StafferController@show');
Route::get('/special-sections/{slug}', 'SpecialSectionsController@show');
Route::get('/stories/{section}/{slug}', 'StoriesController@show');
Route::get('/classifieds', 'PagesController@classifieds');
Route::get('/test/test', 'PagesController@allStaff');

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', 'PagesController@dashboard');
    Route::get('/dashboard', 'PagesController@dashboard');
    Route::get('/move', 'PagesController@dashboard');
    Route::get('/newsletter', 'PagesController@dashboard');
    Route::group(['prefix' => 'core'], function(){
        Route::group(['prefix' => 'stories'], function(){
            Route::get('/create', 'StoriesController@create')->name('create-story');
            Route::post('/create', 'StoriesController@store')->name('store-story');
            Route::get('/', 'StoriesController@index');
            Route::get('/edit/{section}/{slug}', 'StoriesController@edit')->name('edit-story');
            Route::patch('/edit/{section}/{slug}', 'StoriesController@update')->name('update-story');
            Route::delete('/{section}/{slug}', 'StoriesController@destroy')->name('story.delete');
        });

        Route::group(['prefix' => 'web-fronts'], function(){
           Route::get('/', 'WebFrontController@index');
           Route::get('/{section}', 'WebFrontController@show')->name('edit-web-front');
           Route::post('/{section}', 'WebFrontController@update')->name('update-web-front');
        });

        Route::group(['prefix' => 'photos'], function(){
           Route::get('/', 'PhotosController@index');
           Route::get('/create', 'PhotosController@create')->name('create-photo');
           Route::post('/create', 'PhotosController@store')->name('store-photo');
           Route::patch('/edit/{photo}', 'PhotosController@update')->name('update-photo');
           Route::get('/edit/{photo}', 'PhotosController@edit')->name('edit-photo');
        });

        Route::group(['prefix' => 'events'], function(){
           Route::get('/', 'EventController@index');
           Route::get('/create', 'EventController@create')->name('create-event');
           Route::post('/create', 'EventController@store')->name('store-event');
           Route::patch('/edit/{event}', 'EventController@update')->name('update-event');
           Route::get('/edit/{event}', 'EventController@edit')->name('edit-event');
        });

        Route::group(['prefix' => 'layouts'], function(){
           Route::get('/', 'LayoutsController@index');
           Route::get('/create', 'LayoutsController@create')->name('create-layout');
           Route::post('/create', 'LayoutsController@store')->name('store-layout');
           Route::patch('/edit/{layout}', 'LayoutsController@update')->name('update-layout');
           Route::get('/edit/{layout}', 'LayoutsController@edit')->name('edit-layout');
        });

        Route::group(['prefix' => 'graphics'], function(){
            Route::get('/', 'GraphicsController@index');
            Route::get('/create', 'GraphicsController@create')->name('create-graphic');
            Route::post('/create', 'GraphicsController@store')->name('store-graphic');
            Route::patch('/edit/{graphic}', 'GraphicsController@update')->name('update-graphic');
            Route::get('/edit/{graphic}', 'GraphicsController@edit')->name('edit-graphic');
        });

        Route::group(['prefix' => 'issues'], function(){
           Route::get('/', 'IssuesController@index');
           Route::get('/create', 'IssuesController@create')->name('create-issue');
           Route::post('/create', 'IssuesController@store')->name('store-issue');
           Route::patch('/edit/{issue}', 'IssuesController@update')->name('update-issue');
           Route::get('/edit/{issue}', 'IssuesController@edit')->name('edit-issue');
        });

        Route::group(['prefix' => 'volumes'], function(){
            Route::get('/', 'VolumesController@index');
            Route::get('/create', 'VolumesController@create')->name('create-volume');
            Route::post('/create', 'VolumesController@store')->name('store-volume');
            Route::patch('/edit/{volume}', 'VolumesController@update')->name('update-volume');
            Route::get('/edit/{volume}', 'VolumesController@edit')->name('edit-volume');
        });

        Route::group(['prefix' => 'sections'], function(){
           Route::get('/', 'SectionsController@index');
           Route::get('/create', 'SectionsController@create')->name('create-section');
           Route::post('/create', 'SectionsController@store')->name('store-section');
           Route::patch('/edit/{section}', 'SectionsController@update')->name('update-section');
           Route::get('/edit/{section}', 'SectionsController@edit')->name('edit-section');
        });

        Route::group(['prefix' => 'polls'], function(){
           Route::get('/', 'PollsController@index');
           Route::get('/create', 'PollsController@create')->name('create-poll');
           Route::post('/create', 'PollsController@store')->name('store-poll');
           Route::patch('/edit/{poll}', 'PollsController@update')->name('update-poll');
           Route::get('/edit/{poll}', 'PollsController@edit')->name('edit-poll');
        });

    });

    Route::group(['prefix' => 'staff'], function(){
       Route::group(['prefix' => 'positions'], function(){
            Route::get('/', 'PositionsController@index');
            Route::get('/create', 'PositionsController@create')->name('create-position');
            Route::post('/create', 'PositionsController@store')->name('store-position');
            Route::patch('/edit/{position}', 'PositionsController@update')->name('update-position');
            Route::get('/edit/{position}', 'PositionsController@edit')->name('edit-position');
       });

       Route::group(['prefix' => 'staffers'], function(){
           Route::get('/', 'StafferController@index');
           Route::get('/create', 'StafferController@create')->name('create-staffer');
           Route::post('/create', 'StafferController@store')->name('store-staffer');
           Route::patch('/edit/{staffer}', 'StafferController@update')->name('update-staffer');
           Route::get('/edit/{staffer}', 'StafferController@edit')->name('edit-staffer');
       });

       Route::group(['prefix' => 'users'], function(){
          Route::get('/', 'UsersController@index');
          Route::get('/create', 'UsersController@create')->name('create-user');
          Route::post('/create', 'UsersController@store')->name('store-user');
          Route::patch('/edit/{user}', 'UsersController@update')->name('update-user');
          Route::get('/edit/{user}', 'UsersController@edit')->name('edit-user');
       });
    });

    Route::group(['prefix' => 'advertising'], function(){
       Route::group(['prefix' => 'ads'], function(){
          Route::get('/', 'AdsController@index');
          Route::get('/create', 'AdsController@create')->name('create-ad');
          Route::post('/create', 'AdsController@store')->name('store-ad');
          Route::patch('/edit/{ad}', 'AdsController@update')->name('update-ad');
          Route::get('/edit/{ad}', 'AdsController@edit')->name('edit-ad');
          Route::delete('/{ad}', 'AdsController@destroy')->name('ad.delete');
       });

       Route::group(['prefix' => 'classifieds'], function(){
          Route::get('/', 'ClassifiedsController@index');
          Route::get('/create', 'ClassifiedsController@create')->name('create-classified');
          Route::post('/create', 'ClassifiedsController@store')->name('store-classified');
          Route::patch('/edit/{classified}', 'ClassifiedsController@update')->name('update-classified');
          Route::get('/edit/{classified}', 'ClassifiedsController@edit')->name('edit-classified');
       });
    });

    Route::group(['prefix' => 'site'], function(){
        Route::group(['prefix' => 'flatpages'], function(){
            Route::get('/', 'FlatpageController@index');
            Route::get('/create', 'FlatpageController@create')->name('create-flatpage');
            Route::post('/create', 'FlatpageController@store')->name('store-flatpage');
            Route::patch('/edit/{flatpage}', 'FlatpageController@update')->name('update-flatpage');
            Route::get('/edit/{flatpage}', 'FlatpageController@edit')->name('edit-flatpage');
        });
    });
});
Route::get('{image_pattern}', 'Folklore\Image\ImageController@serve')->name('image.serve');
Route::get('/{param?}', 'FlatpageController@show')->where(['param' => '.*']);;