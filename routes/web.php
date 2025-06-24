<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('HolaMundo');
});

Route::get('/holaArray', function () {
    $frutas = ['manzana', 'banana', 'naranja'];
    return view('holaArray.index', compact('frutas'));
});

//testController
Route::get('/testController', [UserController::class, 'index']);
