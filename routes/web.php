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
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('objetive', [
    'as' => 'objetive',
    'uses' => 'PagesController@objetive'
]);

Route::get('experience', [
    'as' => 'experience',
    'uses' => 'PagesController@experience'
]);

Route::get('education', [
    'as' => 'education',
    'uses' => 'PagesController@education'
]);

Route::get('skills', [
    'as' => 'skills',
    'uses' => 'PagesController@home'
]);

/*
Route::get('/', ['as' => 'home', function () {
    return view('index');
}]);

Route::get('objetive', ['as' => 'objetive', function () {
    return view('objetive');
}]);

Route::get('experience', ['as' => 'experience', function () {
    return view('experience');
}]);

Route::get('education', ['as' => 'education', function () {
    return view('education');
}]);

Route::get('skills', ['as' => 'skills', function () {
    return view('skills');
}]);
*/
