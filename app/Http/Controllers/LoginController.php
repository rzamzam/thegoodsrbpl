<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('login');
    }
    public function authenticate(Request $request){
        $credentials =  $request -> validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(Auth::user()->role_id === 1){
                return redirect('/buyer/katalog');
            } elseif(Auth::user()->role_id === 2){
                return redirect('/supplier');
            } elseif(Auth::user()->role_id === 3){
                return redirect('/admin');
            } elseif(Auth::user()->role_id === 4){
                return redirect('/store');
            }
        }
        // if(Auth::attempt($credentials)){
        //     $request->session()->regenerate();
        //     // dd($credentials);
        //     // return redirect()->route('login');
        //     return redirect('/katalog');
        // }
        return redirect('/register');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    
    
}
