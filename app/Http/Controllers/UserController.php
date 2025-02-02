<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "This is index";
    }

    //show method
    public function show()
    {
        return "This is show";
    }
}
