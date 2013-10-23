<?php

Route::get('/', 'FrontController@index');
Route::get('add', 'CarController@addCar');
Route::post('/car/_add', 'CarController@_add');
Route::get('/config/list', 'ConfigController@view');