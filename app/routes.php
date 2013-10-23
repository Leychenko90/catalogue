<?php

Route::get('/', 'FrontController@index');
Route::get('add', 'EntityController@addCar');
Route::post('/car/_add', 'EntityController@_add');