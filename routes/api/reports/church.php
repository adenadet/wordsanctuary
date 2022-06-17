<?php 

use Illuminate\Support\Facades\Route;

Route::get('/services/initials', 'ServiceController@initials')->name('services.initials');

Route::apiResources([
    'services' => 'ServiceController',
]);
