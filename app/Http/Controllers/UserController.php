<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return array('nombre' => 'Juan', 'edad' => 20);
    }
}
