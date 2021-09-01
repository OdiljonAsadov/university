<?php

use Illuminate\Support\Facades\Route;

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
    return view('main.landing');
});

Route::get('/admin', function () {
    return view('index');
});

// Route::get('/login', function () {
//     return view('main.login');
// });

Route::get('/registration', function () {
    return view('main.registration');
});


Route::get('/table', function () {
    return view('main.table');
});


Route::get('/login', 'authController@login');
Route::post('/table', 'authController@loginUser');


# --- Groups --- #

Route::get('/groups', 'groupsController@index');
Route::get('/groups/add', 'groupsController@create');
Route::post('/groups/add', 'groupsController@store');
Route::get('/groups/edit/{id}', 'groupsController@edit');
Route::post('/groups/edit/{id}', 'groupsController@update');
Route::get('/groups/delete/{id}', 'groupsController@destroy');


# --- Role --- #

Route::get('/role', 'rolesController@index');
Route::get('/role/add', 'rolesController@create');
Route::post('/role/add', 'rolesController@store');
Route::get('/role/edit/{id}', 'rolesController@edit');
Route::post('/role/edit/{id}', 'rolesController@update');
Route::get('/role/delete/{id}', 'rolesController@destroy');


# --- Role --- #

Route::get('/room', 'roomsController@index');
Route::get('/room/add', 'roomsController@create');
Route::post('/room/add', 'roomsController@store');
Route::get('/room/edit/{id}', 'roomsController@edit');
Route::post('/room/edit/{id}', 'roomsController@update');
Route::get('/room/delete/{id}', 'roomsController@destroy');


# --- Sciences --- #

Route::get('/science', 'sciencesController@index');
Route::get('/science/add', 'sciencesController@create');
Route::post('/science/add', 'sciencesController@store');
Route::get('/science/edit/{id}', 'sciencesController@edit');
Route::post('/science/edit/{id}', 'sciencesController@update');
Route::get('/science/delete/{id}', 'sciencesController@destroy');


# --- Day --- #

Route::get('/day', 'daysController@index');
Route::get('/day/add', 'daysController@create');
Route::post('/day/add', 'daysController@store');
Route::get('/day/edit/{id}', 'daysController@edit');
Route::post('/day/edit/{id}', 'daysController@update');
Route::get('/day/delete/{id}', 'daysController@destroy');



# --- Times --- #

Route::get('/time', 'timesController@index');
Route::get('/time/add', 'timesController@create');
Route::post('/time/add', 'timesController@store');
Route::get('/time/edit/{id}', 'timesController@edit');
Route::post('/time/edit/{id}', 'timesController@update');
Route::get('/time/delete/{id}', 'timesController@destroy');



# --- Teachers --- #

Route::get('/teacher', 'teachersController@index');
Route::get('/teacher/add', 'teachersController@create');
Route::post('/teacher/add', 'teachersController@store');
Route::get('/teacher/edit/{id}', 'teachersController@edit');
Route::post('/teacher/edit/{id}', 'teachersController@update');
Route::get('/teacher/delete/{id}', 'teachersController@destroy');


# --- Users --- #

Route::get('/user', 'usersController@index');
Route::get('/user/add', 'usersController@create');
Route::post('/user/add', 'usersController@store');
Route::get('/user/show/{id}', 'usersController@show');
Route::get('/user/edit/{id}', 'usersController@edit');
Route::post('/user/edit/{id}', 'usersController@update');
Route::get('/user/delete/{id}', 'usersController@destroy');


# --- Time Table --- #

Route::get('/timeTable', 'timeTableController@index');
Route::get('/timeTable/add', 'timeTableController@create');
Route::post('/timeTable/add', 'timeTableController@store');
Route::get('/timeTable/show/{id}', 'timeTableController@show');
Route::get('/timeTable/edit/{id}', 'timeTableController@edit');
Route::post('/timeTable/edit/{id}', 'timeTableController@update');
Route::get('/timeTable/delete/{id}', 'timeTableController@destroy');
