<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:3'
        ]);

        $validate['password'] = bcrypt($validate['password']);
        User::create($validate);

        $request->session()->flash('success', 'Registrasi Sukses');

        return redirect('/login');
    }
}
