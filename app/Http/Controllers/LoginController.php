<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Auth
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // Validasi daari backend
        // email:dns
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //Import Auth untuk melakukan authentikas
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Menghaspus Session
        $request->session()->invalidate();
        // membuat session baru
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
