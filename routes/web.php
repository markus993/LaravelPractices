<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('holaMundo');
});

Route::get('/holaArray', function () {
    $frutas = ['manzana', 'banana', 'naranja'];

    return view('holaArray.index', compact('frutas'));
});

// testController
Route::get('/testController', [UserController::class, 'index']);
