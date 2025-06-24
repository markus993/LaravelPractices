<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HolaMundo');
});
Route::get('/holaArray', function () {
    $frutas = ['manzana', 'banana', 'naranja'];
    return view('holaArray.index', compact('frutas'));
});
