<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return ['nombre' => 'Juan', 'edad' => 20];
    }
}
