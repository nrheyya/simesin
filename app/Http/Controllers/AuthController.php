<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin/beranda')->with('success', 'Berhasil Login Sebagai Admin');
        }

        return back()->withErrors([
            'email' => 'Login Gagal.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('login');
    }
}
