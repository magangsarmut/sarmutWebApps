<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    // HALAMAN LOGIN
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login',
            'active' => 'signin'

        ]);
    }

    // FUNGSI LOGIN
    public function authenticate(Request $request)
    {

        // MEMBUAT SYARAT LOGIN
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // JIKALAU LOGIN SUKSES, HALAMAN DIARAHKAN KE DASHBOARD
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        };

        // JIKA LOGIN GAGAL, POPUP LOGIN ERROR AKAN DIMUNCULKAN DI HALAMAN LOGIN
        return back()->with('loginError', 'Username atau Password Salah!');

    }

    // FUNGSI LOGOUT
    public function logout()
    {
        // INISIASI LOGOUT DENGAN AUTH
        Auth::logout();

        // INVALIDATE SESION YANG DIPAKAI
        request()->session()->invalidate();

        // MEMBUAT TOKEN BARU UNTUK AUTH
        request()->session()->regenerateToken();

        // KEMBALI KE HALAMAN HOME
        return redirect('/');
        
    }
}
