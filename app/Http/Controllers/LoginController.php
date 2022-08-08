<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login',[
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($validate))
        {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'login gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->regenerateToken();
        $request->session()->invalidate();

        return redirect('/login');

    }
}
