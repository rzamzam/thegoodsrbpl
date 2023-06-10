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
            if(Auth::user()->role_id === 1){ //buyer
                return redirect('/katalog');
            } elseif(Auth::user()->role_id === 2){ //owner
                return redirect('/owner');
            } elseif(Auth::user()->role_id === 3){ //supplier
                return redirect('/supplier');
            } else{
                return redirect('/admin'); //admin
            }
        }
        return back();
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
