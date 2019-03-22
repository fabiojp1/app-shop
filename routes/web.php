<?php

Route::get('/', 'testcontroller@welcome'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
