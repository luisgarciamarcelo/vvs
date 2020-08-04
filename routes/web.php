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
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', function (){
    return 'you are admin';
})->middleware(['auth','auth.admin']);


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
    Route::resource('/screens', 'PantallaController',['except' => ['show','store']]);
});

/*Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
    Route::resource('/users','Admin\UserController',['except' => ['show','create','store']]);
});*/

