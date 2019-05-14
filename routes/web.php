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


//single route
    /*Route::get('/', 'FrontController@index');*/


//route anonameus
    /*Route::get('/contact-us','FrontController@contact')->name('contact');*/


//route group
    /*Route::group(['prefix'=>'admin'],function (){
        Route::get('/create','FrontController@index');
        Route::get('/list','FrontController@index');
        Route::get('/dashboard','FrontController@index');
        Route::get('/user','FrontController@index');

    });*/


// route group namespace

    /*Route::group(['namespace'=>'Frontend'],function (){
        Route::get('/', 'FrontController@index');
        Route::get('/contact-us','FrontController@contact')->name('contact');
        Route::post('/contact-us','FrontController@contact')->name('contact');
    });*/

    /*Route::group(['namespace'=>'Backend'],function (){
        Route::get('/create','FrontController@index');
        Route::get('/list','FrontController@index');
        Route::get('/dashboard','FrontController@index');
        Route::get('/user','FrontController@index');
    });*/


//route group name
//wrong way
    /*Route::group(['namespace'=>'Frontend',],function (){
        Route::get('/', 'FrontController@index')->name('frontend.index');
        Route::get('/user','FrontController@contact')->name('frontend.contact');
    });*/
//right way and easy
//tahole obossoi namespace , prefix , name function use kore korte hobe;
    /*Route::name('backend.')->namespace('Backend')->prefix('backend')->group(function (){
        Route::get('/', 'FrontController@index')->name('index');
        Route::get('/user','FrontController@contact')->name('contact');
    });*/

//Frontend part
   /* Route::name('frontend.')->namespace('Frontend')->group(function(){
    Route::get('/','FrontController@index')->name('index');
    Route::get('/users/{id}/{name?}','FrontController@user')->name('users');
    Route::post('/users','FrontController@user');
    });*/

//Backend part
    /*Route::name('backend.')->namespace('Backend')->prefix('backend')->group(function(){
        Route::get('/','FrontController@index')->name('index');
        Route::resource('post','PostController');
    });*/

    Route::get('/','backend\FrontController@index');
    Route::get('/register','backend\FrontController@showRegistrationFrom')->name('register');
    Route::post('/register','backend\FrontController@processRegistration');

