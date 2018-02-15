<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('INQUISIDORES', function () {
    return view('INQUISIDORES');
});

Route::get('INQUISICION', function () {
    return view('INQUISICION');
});

Route::get('numeros', 'InqController@fibonacci');
Route::get('numeros2', 'InqController@potencia');

route::resource('almacen/categoria','CategoriaController');