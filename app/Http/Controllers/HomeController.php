<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('menu.dashboard-admin');
    }

    function login()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }
}
