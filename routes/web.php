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