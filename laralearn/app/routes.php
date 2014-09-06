<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', function() {
    return View::make('hello');
});


Route::get('/example', function() {
    return 'first example';
});

Route::get('/exampleWithParameter/{name}', function($name) {
    return 'example with parameter: ' . $name;
});

Route::resource('author', 'AuthorController', array('except' => array('create', 'edit')));