<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:cache'); //$exitCode = Artisan::call('cache:clear'); 
    return "All done boss, anything else";
});

Route::get('/',             'PageMakerController@index')->name('welcome');
Route::get('/pages/{any}',  'PageMakerController@index')->where('any', '.*');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/app/{any}',  'HomeController@index')->where('any', '.*');

Route::group(['middleware' => 'auth','namespace' => 'Std', 'name' => 'student.'],function(){
    Route::resource('/learn/student_area/exam', 'ExamController');
});
