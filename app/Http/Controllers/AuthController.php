<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function showLoginForm()
    {
        return view('login');
    }

    function login()
    {
        $credential = [
            'email' => request('email'),
            'password' => request('password')
        ];

        if (auth()->attempt($credential)) {
            return redirect('admin');
        }

        return back()->with('error', 'Akun TIdak DI Temukan');
    }

    function loginproses()
    {

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            if ($user->level == 1) return redirect('admin')->with('success', 'Berhasil Login Sebagai Admin');
        } else {
            return back()->with('warning', 'Login Error!');
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect('login');
    }
}
