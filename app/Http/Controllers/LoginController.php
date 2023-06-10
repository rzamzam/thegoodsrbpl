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
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            dd($credentials);
            return redirect()->intended('katalog');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        // if (Auth::attempt(['email' => $request->email, 'password' =>$request->password])) {
        //     // Authentication passed...
        //     return redirect()->intended('katalog');
        // }
        // $credentials =  $request -> validate([
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);
        // if(Auth::attempt($credentials)){
        //     $request->session()->regenerate();
        //     if(Auth::user()->role_id === 1){
        //         return redirect('/katalog');
        //     } elseif(Auth::user()->role_id === 2){
        //         return redirect('/supplier');
        //     } elseif(Auth::user()->role_id === 3){
        //         return redirect('/admin');
        //     } elseif(Auth::user()->role_id === 4){
        //         return redirect('/store');
        //     }
        // }
        // if(Auth::attempt($credentials)){
        //     $request->session()->regenerate();
        //     // dd($credentials);
        //     // return redirect()->route('login');
        //     return redirect('/katalog');
        // }
        // return redirect('/homepage');
    }
    public function dashboard()
    {
        if(Auth::check())
        {
            return view('katalog');
        }
        
        return redirect()->route('login')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
    } 
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
