<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        return redirect('login');
    }

    public function LoginProses()
    {
        $credentials = ['username' => request('username'), 'password' => request('password')];
        
        if (auth()->guard('admin')->attempt($credentials)) {
            return redirect('admin/beranda')->with('success', 'Login Berhasil');
        }
    }
}
