<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index()
    {
        return view('logn');
    }

    public function logn(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Kondisi untuk role
            if (Auth::user()->hasRole('admin')) {
                return redirect()->intended('/admin')->with('success', 'Selamat datang, Admin!');
            } elseif (Auth::user()->hasRole('petugas')) {
                return redirect()->intended('/home')->with('success', 'Login berhasil, selamat datang!');
            }
        
            // Default, jika peran tidak dikenali
            return redirect()->intended('/home')->with('success', 'Login berhasil, selamat datang!');
        }
        
    
        // Authentication failed, redirect back to form with error
        return redirect()->back()->with('error', 'Email atau password salah.');
    }
    
    
    
}
