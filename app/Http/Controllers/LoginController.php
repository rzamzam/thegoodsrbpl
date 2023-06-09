<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(){
        return view('login');
    }
    public function authenticate(Request $request){
        $credentials =  $request -> validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(Auth::user()->role === 'buyer'){
                return redirect('/katalog');
            } elseif(Auth::user()->role === 'supplier'){
                return redirect('/supplier');
            } elseif(Auth::user()->role === 'admin'){
                return redirect('/admin');
            } elseif(Auth::user()->role === 'store'){
                return redirect('/store');
            }
            return redirect('/');
        }
        return back()->with('loginError', 'Login Failed');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    
    
}
