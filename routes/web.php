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
    'uses' => 'PagesController@skills'
]);

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'PagesController@contact'
]);

//Route::post('sendMail', 'PagesController@sendMail');

// Genera rutas automáticamente para "messages" desde el controlador
Route::resource('messages', 'MessagesController');

// Rutas hacia el login y logout del usuario
Route::get('login', [
    'as'=> 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
    'as'=> 'login',
    'uses' => 'Auth\LoginController@login'
]);
Route::get('logout', [
    'as'=> 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

/*
// Almacenar el mensaje en la base de datos
Route::post('messages/store', [
    'as' => 'messages.store',
    'uses' => 'MessagesController@store'
]);

// Mostrar todos los mensajes
Route::get('messages/index', [
    'as' => 'messages.index',
    'uses' => 'MessagesController@index'
]);

// Mostrar un mensaje por ID
Route::get('messages/{id}', [
    'as' => 'messages.show',
    'uses' => 'MessagesController@show'
]);

// Editar un mensaje
Route::get('messages/{id}/edit', [
    'as' => 'messages.edit',
    'uses' => 'MessagesController@edit'
]);

// Actualizar un mensaje
Route::put('messages/{id}', [
    'as' => 'messages.update',
    'uses' => 'MessagesController@update'
]);

// Actualizar un mensaje
Route::delete('messages/{id}', [
    'as' => 'messages.destroy',
    'uses' => 'MessagesController@destroy'
]);

*/

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
