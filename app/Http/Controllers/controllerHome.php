<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerHome extends Controller
{
    public function index()
    {
        return view('user.login');
    }

    public function registPage()
    {
        return view('user.regist');
    }

    public function homePage()
    {
        return view('user.home');
    }
}