<?php 

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'church'], function () {
    Route::get('/bible',    'BibleController@index')->name('bible');
    Route::get('/branches', 'ChurchController@branches')->name('branches');
    Route::get('/givings',  'ChurchController@givings')->name('givings');

    Route::apiResources([
        '/events' => 'EventController',
    ]);
});